<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Provide data with php for Axios</title>
</head>

<body>



    <script src="./axios/axios.min.js"></script>
    <script>
        // =====================================
        axios.post('post_sample.php', {
                id: 25
            })
            .then(res => console.log(res.data));

        // =====================================
        axios.get('get_sample.php')
            .then(res => console.log(res.data));
    </script>
</body>

</html>