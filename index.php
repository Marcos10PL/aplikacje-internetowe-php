<?php

$projects = scandir(__DIR__);

echo "<h3>Moje projekty:</h3>";

echo "<ul>";
foreach ($projects as $project) {
  if ($project == "." || $project == "..")
    continue;

  if (strpos($project, 'php') === 0)
    echo "<li><a href='./$project'>$project</a></li>";
}
echo "</ul>";