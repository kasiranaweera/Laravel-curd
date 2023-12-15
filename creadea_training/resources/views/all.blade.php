<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
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

        .all {
            background: #dddcdc;
            border-radius: 15px;

            height: 90%;
            width: 100%;

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

        /* .firstColum div:hover {
    background: #ccc;
    transition: 0.5s;
} */
        .firstColum div h4 {
            padding-top: 10px;
        }

        .deve {
            background: #fff;
            border-radius: 15px;

            height: 90%;
            width: 100%;
            cursor: pointer;
        }

        .deve:hover {
            background: #dddcdc;
            transition: 3s
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

        .secondcontainer {
            height: 90%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;


        }

        .row2,
        .row3,
        .row4,
        .row5 {
            width: 90%;
            display: flex;
            flex-direction: row;
            height: 20%;
            padding-top: 10px;
            box-shadow: 0px 1px;
        }

        .row1 {
            width: 90%;
            display: flex;
            flex-direction: row;
            height: 5%;
            padding-top: 10px;
            box-shadow: 0px 1px;

        }

        .coloum1,
        .coloum2,
        .coloum3 {
            width: 30%;


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
                        <h2>All Info</h2>
                    </div>
                </div>
                <div class="secondcontainer">
                    <!-- <table border=1>
                        <thead>
                            <tr>
                                <th>Software Name</th>
                                <th>Developers</th>
                                <th>Developer Name</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td rowspan="4">Mr.Tech Attandence System</td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table> -->
                    <div class="row1">
                        <div class="coloum1">Software name</div>
                        <div class="coloum2">Developers</div>
                        <div class="coloum3">Software Version</div>
                    </div>
                    @foreach($softwares as $item)
                    <div class="row2">
                        <div class="coloum1">{{ $item->software_name }}</div>
                        <div class="coloum2">
                            @php
                            $developers = App\Models\Developers::where('software_id', $item->id)
                            ->get()
                            ->all();
                            @endphp
                            @if ($developers)
                            @foreach($developers as $item2)
                                {{ $item2->developer_name }}
                                <br>
                            @endforeach
                            @else
                                No Developers <br>
                            @endif
                        </div>
                        <div class="coloum3">{{ $item->current_version }}</div>
                    </div>
                    @endforeach
                    <!-- <div class="row2">
                        <div class="coloum1">School management system</div>
                        <div class="coloum2">Minidu Thiranjaya<br>
                            Janith Sanjana</div>
                        <div class="coloum3">V5.2</div>
                    </div>
                    <div class="row2">
                        <div class="coloum1">Safekids</div>
                        <div class="coloum2">Gimhan Rashmitha<br>
                            Janith Sanjana<br>
                            Reshan Edirisinghe</div>
                        <div class="coloum3">V3.4</div>
                    </div>
                    <div class="row2">
                        <div class="coloum1">POS system</div>
                        <div class="coloum2">Reshan Edirisinghe<br>
                            Janith Sanjana</div>
                        <div class="coloum3">V2.1</div>
                    </div> -->



                </div>
            </div>

        </div>

    </div>
</body>

</html>