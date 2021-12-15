$(document).ready(function () {

    $(".customSwitch").bootstrapSwitch({
        onText: 'Active',
        offText: 'Inavtive',
        offColor: 'Danger',
        animate: true,
        size: 'large',
        onSwitchChange:function(event, state) {
          changeSessionState(event,state);
        }
    });


});

function changeSessionState(e,state)
{
  var stateBool = 0;
  if (state) {
    stateBool = 1;
  }
  $.ajax({
      type: "POST",
      url: '/admin/conference/edit/1/'+e.target.getAttribute('data-session-id'),
      data: { state: stateBool, _token: $('meta[name="csrf-token"]').attr('content') },
      success: function (data) {
         console.log(data.session_id);
         $("<p>Session "+data.session_id+" state has been updated!!</p>").appendTo('.toast-body');
         $("#myToast").toast("show");
      },
      error: function (data, textStatus, errorThrown) {
          console.log(data);

      },
  });
}
