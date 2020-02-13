@extends('layout')

@section('title')
    Studie voortgang
@endsection

@section('content')
    <style>
        @media only screen and (max-width: 600px) {
            .scrollable-to-side {
                overflow-x: scroll;
            }
        }
    </style>
    <div class="container-fluid nav-bar-fix" style="padding-top: 65px">
        <!--Table-->
        <div class="text">
            <div class="table scrollable-to-side">
                <table>
                    <tr>
                        <th>Cursus</th>
                        <th>Toets</th>
                        <th>Weging</th>
                        <th>EC</th>
                    </tr>
                    <!--Blok 1-->
                    <tr>
                        <td>Opleidings- en beroepsoriëntatie</td>
                        <td>Eindgesprek</td>
                        <td>100%</td>
                        <td>2.5</td>
                    </tr>
                    <tr>
                        <td>Computer science basics</td>
                        <td>Theorietentamen</td>
                        <td>100%</td>
                        <td>7.5</td>
                    </tr>
                    <tr>
                        <td>Programming basics</td>
                        <td>Casustoets</td>
                        <td>100%</td>
                        <td>5</td>
                    </tr>
                    <!--Blok 2-->
                    <tr>
                        <td>Professional skills 1</td>
                        <td>Presentatie</td>
                        <td>33%</td>
                        <td>2.5</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Verslag</td>
                        <td>33%</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Functioneringsgesprek</td>
                        <td>33%</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>HZ Personality</td>
                        <td>Portfolio</td>
                        <td>100%</td>
                        <td>2.5</td>
                    </tr>
                    <tr>
                        <td>Object-oriented programming</td>
                        <td>Casustoets</td>
                        <td>50%</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Groepsproject</td>
                        <td>50%</td>
                        <td>5</td>
                    </tr>
                    <!--blok 3-->
                    <tr>
                        <td>Professional skills 2</td>
                        <td>Agile functioneren</td>
                        <td>50%</td>
                        <td>2.5</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Engels opdrachten</td>
                        <td>25%</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Engels werkstuk</td>
                        <td>25%</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Professionele werkplek</td>
                        <td>Eindgesprek</td>
                        <td>100%</td>
                        <td>2.5</td>
                    </tr>
                    <tr>
                        <td>Framework development 1</td>
                        <td>Casustoets</td>
                        <td>100%</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>Framework project 1</td>
                        <td>Requirementsverslag</td>
                        <td>50%</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Projectresultaat</td>
                        <td>50%</td>
                        <td></td>
                    </tr>
                    <!--Blok 4-->
                    <tr>
                        <td>Professional skills 3</td>
                        <td>Agile functioneren</td>
                        <td>50%</td>
                        <td>2.5</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Engels opdrachten</td>
                        <td>25%</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Engels werkstuk</td>
                        <td>25%</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>IT Personality 1</td>
                        <td>Portfolio</td>
                        <td>100%</td>
                        <td>2.5</td>
                    </tr>
                    <tr>
                        <td>Framework development 2</td>
                        <td>Opdrachten</td>
                        <td>100%</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>Framework project 2</td>
                        <td>Code reviews</td>
                        <td>50%</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Projectresultaat</td>
                        <td>50%</td>
                        <td></td>
                    </tr>
                </table>

            </div>
        </div>
    </div>
@endsection
