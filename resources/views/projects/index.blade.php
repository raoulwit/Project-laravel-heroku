<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    Projects
    <ol>
    @foreach($projects as $project)
     <li>
     <a href="/projects/{{ $project->id }}">
       {{ $project->title }}
     </a>
     </li>
    <br>
   @endforeach
  </ol>

  </body>
</html>
