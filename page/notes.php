<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='../styles/notes.css'>
    <title>corner - notes</title>
</head>
<body>
    <?php include_once '../page_components/header_student.php'; ?>
    <?php include_once '../page_components/feed_left_side_student.php'; ?>
    <section class="outer-container">
        <main class="main-container-reactive">
            <section>
                <h1>the following are your marks:</h1>
                <table id='notes-table' border='1'>
    <thead>
        <tr>
            <th>subject_name</th>
            <th>controle 1</th>
            <th>controle 2</th>
            <th>controle 3</th>
            <th>EFM</th>
        </tr>
    </thead>
    <tbody id='notes-body'>
        <tr>
            <td>Math</td>
            <td>15</td>
            <td>17</td>
            <td>13</td>
            <td>16</td>
        </tr>
        <tr>
            <td>Science</td>
            <td>12</td>
            <td>14</td>
            <td>16</td>
            <td>15</td>
        </tr>
        <tr>
            <td>English</td>
            <td>18</td>
            <td>17</td>
            <td>19</td>
            <td>20</td>
        </tr>
        <tr>
            <td>History</td>
            <td>13</td>
            <td>15</td>
            <td>11</td>
            <td>14</td>
        </tr>
        <tr>
            <td>Geography</td>
            <td>11</td>
            <td>13</td>
            <td>12</td>
            <td>14</td>
        </tr>
    </tbody>
</table>

            </section>
        </main>
    </section>
</body>
</html>