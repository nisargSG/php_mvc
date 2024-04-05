<html>

<head>
    <title>Users List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="p-4">
    <h1>User's List</h1>

    <div id="CONTAINER_LIST"></div>

    <script>
        const apiUrl="http://localhost/php_mvc/controller/user.php"

        const xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {


            if (this.readyState == 4 && this.status == 200) {
                const jsonData=JSON.parse(xhttp.responseText);

                const cards=jsonData.map((item)=>{
                    
                    return `<div class="card mb-2">
                                <div class="card-body">
                                    ${item.name}
                                </div>
                            </div>`

                   
                })

                console.log(cards.join(""))

                const div=document.getElementById("CONTAINER_LIST")
                div.innerHTML=cards.join("")

            }
        };

        xhttp.open("GET", apiUrl, false);
        xhttp.send();


</script>
    
</body>

</html>

