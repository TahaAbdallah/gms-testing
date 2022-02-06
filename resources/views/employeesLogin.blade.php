<html>

<head>

<title></title>

</head>

<body>


<form action="{{ url('/'.encrypt($data)) }}" method="post">
    @csrf
    <!-- all your form data -->
    <input type="submit" value="Post">
    </form>



</body>

</html>