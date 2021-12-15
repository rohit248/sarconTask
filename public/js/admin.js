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
  console.log(state);
  //TODO
}
