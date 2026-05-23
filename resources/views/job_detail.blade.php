<!DOCTYPE html>
<html>
<head>
    <title>{{ $job['title'] }}</title>
</head>
<body>
    <h1>{{ $job['title'] }}</h1>
    <p><strong>Salary:</strong> {{ $job['salary'] }}</p>
    <p>{{ $job['description'] }}</p>
    <p><strong>Company:</strong> {{ $job['company'] }}</p>
    <p><strong>Location:</strong> {{ $job['location'] }}</p>

    <a href="/">Back to job list</a>
</body>
</html>
