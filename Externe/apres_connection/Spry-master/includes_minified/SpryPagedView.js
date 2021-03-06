// SpryPagedView.js - version 0.7 - Spry Pre-Release 1.6.1
//
// Copyright (c) 2007. Adobe Systems Incorporated.
// All rights reserved.
//
// Redistribution and use in source and binary forms, with or without
// modification, are permitted provided that the following conditions are met:
//
//   * Redistributions of source code must retain the above copyright notice,
//     this list of conditions and the following disclaimer.
//   * Redistributions in binary form must reproduce the above copyright notice,
//     this list of conditions and the following disclaimer in the documentation
//     and/or other materials provided with the distribution.
//   * Neither the name of Adobe Systems Incorporated nor the names of its
//     contributors may be used to endorse or promote products derived from this
//     software without specific prior written permission.
//
// THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"
// AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
// IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE
// ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE
// LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR
// CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF
// SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS
// INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN
// CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
// ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
// POSSIBILITY OF SUCH DAMAGE.

var Spry;if(!Spry)Spry={};if(!Spry.Data)Spry.Data={};Spry.Data.PagedView=function(ds,options)
{Spry.Data.DataSet.call(this);this.ds=ds;this.pageSize=10;this.pageOffset=0;this.forceFullPages=false;this.pageFirstItemOffset=0;this.useZeroBasedIndexes=false;this.setCurrentRowOnPageChange=false;Spry.Utils.setOptions(this,options);this.adjustmentValue=1;if(!this.useZeroBasedIndexes)
this.adjustmentValue=0;this.pageStop=this.pageOffset+this.pageSize;this.ds.addObserver(this);this.preProcessData();if(this.pageSize>0)
this.filter(this.getFilterFunc());};Spry.Data.PagedView.prototype=new Spry.Data.DataSet();Spry.Data.PagedView.prototype.constructor=Spry.Data.PagedView;Spry.Data.PagedView.prototype.setCurrentRow=function(rowID)
{if(this.ds)
this.ds.setCurrentRow(rowID);};Spry.Data.PagedView.prototype.setCurrentRowNumber=function(rowNumber)
{if(this.ds)
this.ds.setCurrentRowNumber(rowNumber);};Spry.Data.PagedView.prototype.sort=function(columnNames,sortOrder)
{if(!columnNames)
return;if(typeof columnNames=="string")
columnNames=[columnNames,"ds_RowID"];else if(columnNames.length<2&&columnNames[0]!="ds_RowID")
columnNames.push("ds_RowID");if(!sortOrder)
sortOrder="toggle";if(sortOrder=="toggle")
{if(this.lastSortColumns.length>0&&this.lastSortColumns[0]==columnNames[0]&&this.lastSortOrder=="ascending")
sortOrder="descending";else
sortOrder="ascending";}
var nData={oldSortColumns:this.lastSortColumns,oldSortOrder:this.lastSortOrder,newSortColumns:columnNames,newSortOrder:sortOrder};this.notifyObservers("onPreSort",nData);this.disableNotifications();Spry.Data.DataSet.prototype.sort.call(this,columnNames,sortOrder);this.updatePagerColumns();this.firstPage();this.enableNotifications();this.notifyObservers("onPostSort",nData);};Spry.Data.PagedView.prototype.loadData=function()
{if(!this.ds||this.ds.getLoadDataRequestIsPending())
return;if(!this.ds.getDataWasLoaded())
{this.ds.loadData();return;}
Spry.Data.DataSet.prototype.loadData.call(this);};Spry.Data.PagedView.prototype.onDataChanged=function(notifier,data)
{this.setPageOffset(0);this.preProcessData();};Spry.Data.PagedView.prototype.onCurrentRowChanged=function(notifier,data)
{var self=this;setTimeout(function(){self.notifyObservers("onCurrentRowChanged",data);},0);};Spry.Data.PagedView.prototype.onPostSort=Spry.Data.PagedView.prototype.onDataChanged;Spry.Data.PagedView.prototype.updatePagerColumns=function()
{var rows=this.getData(true);if(!rows||rows.length<1)
return;var numRows=rows.length;var pageSize=(this.pageSize>0)?this.pageSize:numRows;var firstItem=1;var lastItem=firstItem+pageSize-1;lastItem=(lastItem<firstItem)?firstItem:(lastItem>numRows?numRows:lastItem);var pageNum=1;var pageCount=parseInt((numRows+pageSize-1)/pageSize);var pageItemCount=Math.min(numRows,pageSize);for(var i=0;i<numRows;i++)
{itemIndex=i+1;if(itemIndex>lastItem)
{firstItem=itemIndex;lastItem=firstItem+this.pageSize-1;lastItem=(lastItem>numRows)?numRows:lastItem;pageItemCount=Math.min(lastItem-firstItem+1,pageSize);++pageNum;}
var row=rows[i];if(row)
{row.ds_PageNumber=pageNum;row.ds_PageSize=this.pageSize;row.ds_PageItemRowNumber=i;row.ds_PageItemNumber=itemIndex;row.ds_PageFirstItemNumber=firstItem;row.ds_PageLastItemNumber=lastItem;row.ds_PageItemCount=pageItemCount;row.ds_PageCount=pageCount;row.ds_PageTotalItemCount=numRows;}}};Spry.Data.PagedView.prototype.preProcessData=function()
{if(!this.ds||!this.ds.getDataWasLoaded())
return;this.notifyObservers("onPreLoad");this.unfilteredData=null;this.data=[];this.dataHash={};var rows=this.ds.getData();if(rows)
{var numRows=rows.length;for(var i=0;i<numRows;i++)
{var row=rows[i];var newRow=new Object();Spry.Utils.setOptions(newRow,row);this.data.push(newRow);this.dataHash[newRow.ds_RowID]=newRow;}
if(numRows>0)
this.curRowID=rows[0].ds_RowID;this.updatePagerColumns();}
this.loadData();};Spry.Data.PagedView.prototype.getFilterFunc=function()
{var self=this;return function(ds,row,rowNumber){if(rowNumber<self.pageOffset||rowNumber>=self.pageStop)
return null;return row;};};Spry.Data.PagedView.prototype.setPageOffset=function(offset)
{var numRows=this.getData(true).length;this.pageFirstItemOffset=(offset<0)?0:offset;if(this.forceFullPages&&offset>(numRows-this.pageSize))
offset=numRows-this.pageSize;if(offset<0)
offset=0;this.pageOffset=offset;this.pageStop=offset+this.pageSize;};Spry.Data.PagedView.prototype.filterDataSet=function(offset)
{if(this.pageSize<1)
return;this.setPageOffset(offset);var rows=this.getData(true);if(rows&&rows.length&&rows[this.pageFirstItemOffset])
this.curRowID=rows[this.pageFirstItemOffset].ds_RowID;if(this.setCurrentRowOnPageChange)
this.ds.setCurrentRow(this.curRowID);this.filter(this.getFilterFunc());};Spry.Data.PagedView.prototype.getPageCount=function()
{return parseInt((this.getData(true).length+this.pageSize-1)/this.pageSize);};Spry.Data.PagedView.prototype.getCurrentPage=function()
{return parseInt((((this.pageFirstItemOffset!=this.pageOffset)?this.pageFirstItemOffset:this.pageOffset)+this.pageSize)/this.pageSize)-this.adjustmentValue;};Spry.Data.PagedView.prototype.goToPage=function(pageNum)
{pageNum=parseInt(pageNum);var numPages=this.getPageCount();if((pageNum+this.adjustmentValue)<1||(pageNum+this.adjustmentValue)>numPages)
return;var newOffset=(pageNum-1+this.adjustmentValue)*this.pageSize;this.filterDataSet(newOffset);};Spry.Data.PagedView.prototype.goToPageContainingRowID=function(rowID)
{this.goToPageContainingRowNumber(this.getRowNumber(this.getRowByID(rowID),true));};Spry.Data.PagedView.prototype.goToPageContainingRowNumber=function(rowNumber)
{this.goToPage(this.getPageForRowNumber(rowNumber));};Spry.Data.PagedView.prototype.goToPageContainingItemNumber=function(itemNumber)
{this.goToPageContainingRowNumber(itemNumber-1);};Spry.Data.PagedView.prototype.firstPage=function()
{this.goToPage(1-this.adjustmentValue);};Spry.Data.PagedView.prototype.lastPage=function()
{this.goToPage(this.getPageCount()-this.adjustmentValue);};Spry.Data.PagedView.prototype.previousPage=function()
{this.goToPage(this.getCurrentPage()-1);};Spry.Data.PagedView.prototype.nextPage=function()
{this.goToPage(this.getCurrentPage()+1);};Spry.Data.PagedView.prototype.getPageForRowID=function(rowID)
{return this.getPageForRowNumber(this.getRowNumber(this.getRowByID(rowID),true));};Spry.Data.PagedView.prototype.getPageForRowNumber=function(rowNumber)
{return parseInt(rowNumber/this.pageSize)+1-this.adjustmentValue;};Spry.Data.PagedView.prototype.getPageForItemNumber=function(itemNumber)
{return this.getPageForRowNumber(itemNumber-1);};Spry.Data.PagedView.prototype.getPageSize=function()
{return this.pageSize;};Spry.Data.PagedView.prototype.setPageSize=function(pageSize)
{if(this.pageSize==pageSize)
return;if(pageSize<1)
{this.pageSize=0;this.setPageOffset(0);this.updatePagerColumns();this.filter(null);}
else if(this.pageSize<1)
{this.pageSize=pageSize;this.setPageOffset(0);this.updatePagerColumns();this.filterDataSet(this.pageOffset);}
else
{this.pageSize=pageSize;this.updatePagerColumns();this.goToPage(this.getPageForRowNumber(this.pageFirstItemOffset));}};Spry.Data.PagedView.prototype.getPagingInfo=function()
{return new Spry.Data.PagedView.PagingInfo(this);};Spry.Data.PagedView.PagingInfo=function(pagedView)
{Spry.Data.DataSet.call(this);this.pagedView=pagedView;pagedView.addObserver(this);};Spry.Data.PagedView.PagingInfo.prototype=new Spry.Data.DataSet();Spry.Data.PagedView.PagingInfo.prototype.constructor=Spry.Data.PagedView.PagingInfo;Spry.Data.PagedView.PagingInfo.prototype.onDataChanged=function(notifier,data)
{this.extractInfo();};Spry.Data.PagedView.PagingInfo.prototype.onPostSort=Spry.Data.PagedView.PagingInfo.prototype.onDataChanged;Spry.Data.PagedView.PagingInfo.prototype.extractInfo=function()
{var pv=this.pagedView;if(!pv||!pv.getDataWasLoaded())
return;this.notifyObservers("onPreLoad");this.unfilteredData=null;this.data=[];this.dataHash={};var rows=pv.getData(true);if(rows)
{var numRows=rows.length;var numPages=pv.getPageCount();var i=0;var id=0;while(i<numRows)
{var row=rows[i];var newRow=new Object();newRow.ds_RowID=id++;this.data.push(newRow);this.dataHash[newRow.ds_RowID]=newRow;newRow.ds_PageNumber=row.ds_PageNumber;newRow.ds_PageSize=row.ds_PageSize;newRow.ds_PageCount=row.ds_PageCount;newRow.ds_PageFirstItemNumber=row.ds_PageFirstItemNumber;newRow.ds_PageLastItemNumber=row.ds_PageLastItemNumber;newRow.ds_PageItemCount=row.ds_PageItemCount;newRow.ds_PageTotalItemCount=row.ds_PageTotalItemCount;i+=newRow.ds_PageSize;}
if(numRows>0)
{var self=this;var func=function(notificationType,notifier,data){if(notificationType!="onPostLoad")
return;self.removeObserver(func);self.setCurrentRowNumber(pv.getCurrentPage()-(pv.useZeroBasedIndexes?0:1));};this.addObserver(func);}}
this.loadData();};