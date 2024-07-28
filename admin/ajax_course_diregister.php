<?php

include("../project/connection.php");

                    $sql = "SELECT * from sem_status order by date_reg asc";
                    $res = mysqli_query($connect,$sql);

                    $output="";

                    $output .="

                        <table class='table table-bordered text-white'>
                            <tr>
                                <th>Id</th>
                                <th>Teacher Name</th>
                                <th>Semester</th>
                                <th>Course</th>
                                <th>Date Registered</th>
                                <th>Action</th>
                            </tr>
                    ";

                    if(mysqli_num_rows($res) < 1)
                    {
                        $output .="
                            <tr>
                                <td colspan='5'>No Registered Courses Yet.</td>
                            </tr>
                        ";
                    }

                    while($row = mysqli_fetch_array($res))
                    {
                        $output .= "
                            <tr>
                                <td>".$row['id']."</td>
                                <td>".$row['teacher_n']."</td>
                                <td>".$row['semester']."</td>
                                <td>".$row['course']."</td>
                                <td>".$row['date_reg']."</td>
                                <td>
                                    <div class='col-md-10'>
                                        <div class='row'>
                                            <div class='col-md-4'>
                                                <button id='".$row['id']."' class='btn btn-danger reject'>Deregistered</button>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                        ";
                    }

                    $output .="
                        </tr>
                        </table>
                    ";

                    echo $output;
?>