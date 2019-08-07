$(document).ready(function () {
  $(".danger button").click(function () {
    taskID = $(this).attr('data-id');
    $("#delete_confirmation").show(500);
  });

  $('#delete_confirmation button').click(function () {
    var value = $(this).val();
    if (value == 'yes') {
      $('#task-' + taskID).submit();
    }
    else {
      $("#delete_confirmation").hide(500);
    }
  });
});

function changeStatus(id) {
  var formData = {
    task_id: id
  }
  sendAjax('change_task_status', formData, null);
  var mark_task_element = $('td.mark-task[data-task-id=' + id + '] a');
  var task_done_element = $('td.task-done[data-task-id=' + id + '] span');
  if (mark_task_element.attr('class').includes('mark-as-done')){
    mark_task_element.removeClass('btn-success mark-as-done');
    mark_task_element.addClass('btn-danger mark-as-not-done');
    mark_task_element.html('تغییر به وضعیت انجام نشده &cross;');
    task_done_element.toggleClass('text-danger text-success');
    task_done_element.html('بله &check;');
  }
  else {
    mark_task_element.removeClass('btn-danger mark-as-not-done');
    mark_task_element.addClass('btn-success mark-as-done');
    mark_task_element.html('تغییر به وضعیت انجام شده &check;');
    task_done_element.toggleClass('text-danger text-success');
    task_done_element.html('خیر &cross;');
  }
}

function sendAjax(method,formData,target){

    var token = $('input[name="_token"]').val();
    formData._token = token;

    var url = documentRoot+'/ajax/'+method;

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    })
    $.ajax({
        type: 'POST',
        url: url,
        data: formData,
        success: function(data) {
            if(target && data){
                target.html(data);
            }
        }
    });
}
