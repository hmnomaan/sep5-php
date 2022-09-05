<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h2>Grade Assessor<h2>
        <table border="1">
            <tr>
                <td>
                    <table>
                        <form action="grades.php" method="post">
                            <tr>
                                <td>
                                    Enter 5 grades. One per each line:
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Grade 1: <input type="number" name="grade1" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Grade 2: <input type="number" name="grade2" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Grade 3: <input type="number" name="grade3" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Grade 4: <input type="number" name="grade4" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Grade 5: <input type="number" name="grade5" required>
                                </td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <input type="submit">
                                </td>
                            </tr>
                        </form>
                    </table>
                </td>
            </tr>
        </table>
</body>
</html>