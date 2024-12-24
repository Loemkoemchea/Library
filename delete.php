<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Data</title>
</head>
<body>
    <script>
        const urlString = window.location.search;
        const urlParams = new URLSearchParams(urlString);
        const delid = urlParams.get('id');

        fetch("../api/delete.php",{
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                id: delid
            })
        })
        .then(res => {
            return res.json()
        })
        .catch(error => console.log("Error:", error))
        .then(window.location.replace("updateBook.php"))
    </script>
</body>
</html>