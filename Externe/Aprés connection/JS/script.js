$(document).ready(function () {
  $('#accordeon').accordion();
});


// Formulaire scan //


function fileSelected() {
  var file = document.getElementById('fileToUpload').files[0];
  if (file) {
    var fileSize = 0;
    if (file.size > 1024 * 1024)
      fileSize = (Math.round(file.size * 100 / (1024 * 1024)) / 100).toString() + 'MB';
    else
      fileSize = (Math.round(file.size * 100 / 1024) / 100).toString() + 'KB';

    document.getElementById('fileName').innerHTML = 'Name: ' + file.name;
    document.getElementById('fileSize').innerHTML = 'Size: ' + fileSize;
    document.getElementById('fileType').innerHTML = 'Type: ' + file.type;
  }
}

function uploadFile() {
  var fd = new FormData();
  fd.append("fileToUpload", document.getElementById('fileToUpload').files[0]);
  var xhr = new XMLHttpRequest();
  xhr.upload.addEventListener("progress", uploadProgress, false);
  xhr.addEventListener("load", uploadComplete, false);
  xhr.addEventListener("error", uploadFailed, false);
  xhr.addEventListener("abort", uploadCanceled, false);
  xhr.open("POST", "UploadMinimal.aspx");
  xhr.send(fd);
}

function uploadProgress(evt) {
  if (evt.lengthComputable) {
    var percentComplete = Math.round(evt.loaded * 100 / evt.total);
    document.getElementById('progressNumber').innerHTML = percentComplete.toString() + '%';
  }
  else {
    document.getElementById('progressNumber').innerHTML = 'unable to compute';
  }
}

function uploadComplete(evt) {
  /* This event is raised when the server send back a response */
  alert(evt.target.responseText);
}

function uploadFailed(evt) {
  alert("There was an error attempting to upload the file.");
}

function uploadCanceled(evt) {
  alert("The upload has been canceled by the user or the browser dropped the connection.");
}


//CHATBOX

(function () {
  var Message;
  Message = function (arg) {
      this.text = arg.text, this.message_side = arg.message_side;
      this.draw = function (_this) {
          return function () {
              var $message;
              $message = $($('.message_template').clone().html());
              $message.addClass(_this.message_side).find('.text').html(_this.text);
              $('.messages').append($message);
              return setTimeout(function () {
                  return $message.addClass('appeared');
              }, 0);
          };
      }(this);
      return this;
  };
  $(function () {
      var getMessageText, message_side, sendMessage;
      message_side = 'right';
      getMessageText = function () {
          var $message_input;
          $message_input = $('.message_input');
          return $message_input.val();
      };
      sendMessage = function (text) {
          var $messages, message;
          if (text.trim() === '') {
              return;
          }
          $('.message_input').val('');
          $messages = $('.messages');
          message_side = message_side === 'left' ? 'right' : 'left';
          message = new Message({
              text: text,
              message_side: message_side
          });
          message.draw();
          return $messages.animate({ scrollTop: $messages.prop('scrollHeight') }, 300);
      };
      $('.send_message').click(function (e) {
          return sendMessage(getMessageText());
      });
      $('.message_input').keyup(function (e) {
          if (e.which === 13) {
              return sendMessage(getMessageText());
          }
      });
      sendMessage('Hello Philip! :)');
      setTimeout(function () {
          return sendMessage('Hi Sandy! How are you?');
      }, 1000);
      return setTimeout(function () {
          return sendMessage('I\'m fine, thank you!');
      }, 2000);
  });
}.call(this));


$(function() {
  $(".expand").on( "click", function() {
    // $(this).next().slideToggle(200);
    $expand = $(this).find(">:first-child");
    
    if($expand.text() == "+") {
      $expand.text("-");
    } else {
      $expand.text("+");
    }
  });
});