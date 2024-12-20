
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indian Team</title>
    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1000px;
            margin: 30px auto;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        h4 {
            text-align: center;
            font-size: 32px;
            color: #2a3d67;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            text-align: left;
        }

        th, td {
            padding: 12px 15px;
            border: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
        }

        td {
            background-color: #f9f9f9;
        }

        tr:nth-child(even) td {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e9e9e9;
        }

        .table-container {
            overflow-x: auto;
        }

        .sl-no {
            text-align: center;
        }

    </style>
</head>
<body>
    <div class="container">
        <h4>Indian Cricket Team</h4>

        <?php
        $name = ["Sachin Tendulkar", "Rohit Sharma", "Virat Kohli", "Suresh Raina", "MS Dhoni", "Hardik Pandya", "Ravindra Jadeja", "R Ashwin", "Jasprit Bumrah", "Muhammed Shami", "Bhuvneshwar Kumar"];
        $role = ["Batsman", "Batsman", "Batsman", "Batsman", "Wicket-keeper", "All-Rounder", "All-Rounder", "Bowler", "Bowler", "Bowler", "Bowler"];

        echo "<div class='table-container'>";
        echo "<table>
                <tr>
                    <th class='sl-no'>SL.NO</th>
                    <th>PLAYER</th>
                    <th>ROLE</th>
                </tr>";

        for ($i = 0; $i < count($name); $i++) {
            $sl = $i + 1;
            echo "<tr>
                    <td class='sl-no'>$sl</td>
                    <td>$name[$i]</td>
                    <td>$role[$i]</td>
                  </tr>";
        }

        echo "</table>";
        echo "</div>";
        ?>
    </div>
</body>
</html>

