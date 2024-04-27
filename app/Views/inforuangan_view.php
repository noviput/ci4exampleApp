<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Ruangan Lab ICT</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('https://www.bhmpics.com/downloads/blue-landscape-wallpaper/38.vector-wallpaper-with-a-landscape-mountains-and-river-vector-id941103814.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
        .container {
            background-color: #FFFFFF; 
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
            width: 500px;
            position: relative;
            text-align: center;
        }
        h1 {
            text-align: center;
            color: #007BFF;
            margin-bottom: 20px;
        }
        .lab-list {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
            margin-top: 20px;
        }
        .lab-item {
            padding: 15px;
            border-radius: 4px;
            border: 1px solid #808080;
            background-color: #d3d3d3; /* Default background color */
            color: #000;
            font-weight: bold;
        }
        .occupied {
            background-color: #ff0000; /* Occupied lab color */
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTadTQxsd060TxmyUJABZnog10LPYkEDeuqbkKOOCrPBg&s" alt="Logo">
        </div>
        <h1>Info Ruangan Lab ICT</h1>
        <div class="lab-list">
            <div class="lab-item">Lab 2</div>
            <div class="lab-item">Lab 4</div>
            <div class="lab-item">Lab 5</div>
            <div class="lab-item">Lab 6</div>
            <div class="lab-item">Lab 7</div>
            <div class="lab-item">Lab 8</div>
            <div class="lab-item">Lab 9</div>
            <div class="lab-item">Lab 10</div>
            <div class="lab-item">Lab 11</div>
        </div>
    </div>

    <script>
        const occupiedLabs = ["Lab 4", "Lab 7", "Lab 9"];
        occupiedLabs.forEach((labName) => {
            const labItem = document.querySelector(`.lab-item:contains('${labName}')`);
            if (labItem) {
                labItem.classList.add('occupied');
            }
        });
    </script>
</body>
</html>
