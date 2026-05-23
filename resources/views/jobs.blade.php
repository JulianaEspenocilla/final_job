<!DOCTYPE html>
<html>
<head>
    <title>Job List</title>
</head>
<body>
    <h1>Available Jobs</h1>
    <ul>
        @foreach($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}">
                    <strong>{{ $job['title'] }}</strong>
                </a>
            </li>
        @endforeach
    </ul>
</body>
</html>
