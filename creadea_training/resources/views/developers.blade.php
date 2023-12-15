<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <link rel="preconnectz" href="https://fonts.googleapis.com">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    <title>Document</title>
</head>

<body>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
        }

        .main_cntainer {
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;

        }

        .Headr_container {
            width: 100%;
            height: 10%;
            box-shadow: 1px 2px 6px rgba(0, 0, 0, 0.2);
            background-color: #fff;
            margin-bottom: 10px;
            /* padding: 15px; */
        }

        .photo {
            width: 100px;
            height: 70px;
            padding-left: 80px;
        }

        .leftHeader {
            width: 50%;
            height: 100%;
        }

        .rightHeader {
            width: 50%;
            height: 100%;
        }

        .bottom_container {
            width: 100%;
            height: 90%;
            background-color: #fff;
            display: flex;
            flex-direction: row;


        }

        .secondColum h2 {
            color: #acaaaa;

        }

        .firstColum a {
            color: #000;
            text-decoration: none;

        }

        .firstColum {
            width: 20%;
            height: 100%;
            background-color: #fff;
            display: flex;
            flex-direction: column;
            box-shadow: 1px 5px 10px rgba(0, 0, 0, 0.2);
            margin-top: -8px;
            padding-left: 5px;
            padding-top: 8px;
        }

        .firstRow {
            height: 8%;
            width: 100%;
            background-color: #fff;

        }

        .secondRow {
            height: 8%;
            width: 100%;
            background-color: #fff;

        }

        .thirdRow {
            height: 8%;
            width: 100%;
            background-color: #fff;

        }

        .firstColum div {
            background: #fff;
            border-radius: 15px;
            cursor: pointer;
            padding-bottom: 10px;
        }

        .deve {
            background: #dddcdc;
            border-radius: 15px;

            height: 90%;
            width: 100%;

        }

        .soft {
            background: #fff;
            border-radius: 15px;

            height: 90%;
            width: 100%;
            cursor: pointer;
        }

        .soft:hover {
            background: #dddcdc;
            transition: 3s
        }

        .all {
            background: #fff;
            border-radius: 15px;

            height: 90%;
            width: 100%;
            cursor: pointer;
        }

        .all:hover {
            background: #dddcdc;
            transition: 3s
        }

        /* .firstColum div:hover {
    background: #ccc;
    transition: 0.5s;
} */
        .firstColum div h4 {
            padding-top: 10px;
        }


        .secondColum {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
            width: 100%;
        }

        .softwares {
            width: 30%;
            height: 100%;
            text-align: center;
        }

        .softwares h2 {
            padding-top: 10px;
        }

        .button {
            width: 30%;
            height: 100%;
            align-items: center;
            display: flex;
        }

        .buttonn {
            width: 120px;
            height: 30px;
            border: 0;
            background: #000;
            color: #fff;
            border-radius: 5px;
        }

        .main {
            display: flex;
            height: 10%;
            width: 100%;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            box-shadow: 1px 2px 0px rgba(150, 149, 149, 0.2);


        }

        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;

        }

        .modal-content {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            text-align: left;
            width: 300px;

        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 120px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .mySelect {
            border-radius: 20px;
        }

        .buttonn1 {
            background: red;
            width: 70px;
            border: 0;
            height: 20px;
            border-radius: 5px;
            color: #fff;
            align-items: flex-end;
        }

        .buttonn2 {
            background: rgb(0, 0, 0);
            width: 70px;
            border: 0;
            height: 20px;
            border-radius: 5px;
            color: #fff;
        }

        .modal-content h2 i {
            padding-left: 100px;
            color: #000;
        }

        .mySelect,
        .textField {
            border-radius: 5px;
            width: 100%;

        }

        .table1 {
            width: 100%;
            text-allign: left;
            height: 10%;


        }

        .table1 td {
            padding-top: 10px;
        }

        ..row2 {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
        }

        .row2 {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
        }
    </style>
    <div class="main_cntainer">
        <div class="Headr_container">
            <img src="{{ asset('images/eXample-logos_black.png') }}" alt="Your Image" class="photo">

        </div>
        <div class="bottom_container">
            <div class="firstColum">
                <div class="firstRow">
                    <a href="{{ route('page1') }}">
                        <h4 class="soft">Softerwares</h4>
                    </a>
                </div>
                <div class="secondRow">
                    <a href="{{ route('page2') }}">
                        <h4 class="deve">Devolepers</h4>
                    </a>
                </div>
                <div class="thirdRow">
                    <a href="{{ route('page3') }}">
                        <h4 class="all">All</h4>
                    </a>
                </div>
            </div>
            <div class="secondColum">
                <div class="main">
                    <div class="softwares">
                        <h2>Developers</h2>
                    </div>
                    <div class="button">

                        <button onclick="openModal('modal1')" class="buttonn">Add Developer +</button>

                        <div id="modal1" class="modal">
                            <div class="modal-content">
                                <form action="{{ route('DeveloperStore') }}" method="POST">
                                    @csrf
                                    <h2>Creat Developer<i class='bx bx-x' onclick="closeModal('modal1')"></i></h2>
                                    <hr>
                                    <label>Developer Name</label><br>
                                    <input type="text" placeholder="Enter Developer Name" name="developer_name"
                                        class="textField" required> <br> <br>
                                    <label>Software Name</label><br>

                                    <select id="mySelect" class="mySelect" name="software" required>
                                        <option value="">Choose Option</option>
                                        @foreach ($softwares as $item)
                                        <option value="{{ $item->id }}">{{ $item->software_name }}</option>
                                        @endforeach
                                        <!-- <option value="option1">Choose Option</option>
                                        <option value="option1">Creadea POS System</option>
                                        <option value="option2">Safe Kids</option>
                                        <option value="option3">School Managment System</option>
                                        <option value="option4">Mr.Tech Attandence System</option> -->
                                    </select><br><br>
                                    <button onclick="closeModal('modal1')" class="buttonn1">Close</button>
                                    <input type="submit" class="buttonn2">
                                </form>
                            </div>

                        </div>


                    </div>

                </div>
                <div class="row2">
                    <table class="table1">
                        <tr>
                            <th>Developer Name</th>
                            <th>Software Name</th>
                            <th>Action</th>
                        </tr>

                        @foreach ($developers as $item)
                        <tr>
                            <td>{{ $item->developer_name }}</td>
                            <td>{{ $item->software_name }}</td>
                            <td>
                                <a href="{{ route('editDeveloper', ['id'=>$item->id]) }}"><button>Edit</button></a>
                                <a href="{{ route('deleteDeveloper', ['id'=>$item->id]) }}"><button>Delete</button></a>
                            </td>
                        </tr>
                        @endforeach

                    </table>
                </div>

            </div>


        </div>

    </div>
</body>

</html>
<script>
    function openModal(modalId) {
        document.getElementById(modalId).style.display = 'flex';
    }

    function closeModal(modalId) {
        document.getElementById(modalId).style.display = 'none';
    }

</script>
<script>

    document.getElementById('mySelect').addEventListener('change', fu nctio        
        var selectedValue = thi        e;
    console.log('Selected value:', select    Valu});
</script>