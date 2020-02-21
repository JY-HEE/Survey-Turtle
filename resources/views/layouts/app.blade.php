<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Survey Form</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>

    <body>
     @yield('content')
    <!-- Modal -->
    <div class="modal fade" id="surveyAlert" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
    </div>
        
    </body>
</html>

<script>
function Validate(){
    que1 = "";
    que2 = "";
    que3 = "";
    que4 = "";
    len1 = document.surveyform.question1.length;
    len2 = document.surveyform.question2.length;
    len3 = document.surveyform.question3.length;
    len4 = document.surveyform.question4.length;

    for (i = 0; i <len1; i++) {
        if (document.surveyform.question1[i].checked) {
            que1 = document.surveyform.question1[i].value
        }
    }

    for (i = 0; i <len2; i++) {
        if (document.surveyform.question2[i].checked) {
            que2 = document.surveyform.question2[i].value
        }
    }

    for (i = 0; i <len3; i++) {
        if (document.surveyform.question3[i].checked) {
            que3 = document.surveyform.question3[i].value
        }
    }

    for (i = 0; i <len4; i++) {
        if (document.surveyform.question4[i].checked) {
            que4 = document.surveyform.question4[i].value
        }
    }

    if (que1 == "" || que2 == "" || que3 == "" || que4 == "") {
        alert("Please Answer All The Questions");
    }

    return false;
}

function close_window() {
  if (confirm("Close Window?")) {
    window.close();
  }
}
</script>