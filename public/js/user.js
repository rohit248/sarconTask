window.Echo.channel('EventTriggered')
      .listen('ChangeConferenceState', (e) => {
          console.log(e.message.state);
          $('.toast-body').html("");
          if (e.message.state == 0)
          {
            $("<p>Session "+e.message.session_id+" has been Disabled!!</p>").appendTo('.toast-body');
            $('#AudBtn'+e.message.session_id).prop('disabled', true);
            $('#SpeakerBtn'+e.message.session_id).prop('disabled', true);
          }
          else {
            $("<p>Session "+e.message.session_id+" has been enabled!!</p>").appendTo('.toast-body');
            $('#AudBtn'+e.message.session_id).prop('disabled', false);
            $('#SpeakerBtn'+e.message.session_id).prop('disabled', false);

          }
          $("#myToast").toast("show");
      });
