<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" initial-scale=1.0>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Todo app</title>
</head>
<body>
    <div class="container">
    <form method="post" action="">
    @csrf
    <input type="text" class="mt-3 form-control" name="task">
    <button type="submit" class="btn btn-primary">OK</button>
    </form>
        <table class="table">
        <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Task</th>
        <th scope="col">craeted date</th>
        </tr>
        </thead>
        <tbody>
        @foreach($todos as $todo_content)
        <tr>
        <th scope="row">{{ $todo_content->id }}</th>
        <td>{{ $todo_content->content }}</td>
        <td>{{ $todo_content->created_at }}</td>
        <td>
        <form action="" method="post">
        @method('DELETE')
        @csrf
        <input type="hidden" name="id" value="{{$todo_content->id}}">
        <button type="submit" class="btn btn-danger">delete</button>
        </form>
        </td>
        </tr>
        @endforeach
        </tbody>
        </table>

    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>

</html>