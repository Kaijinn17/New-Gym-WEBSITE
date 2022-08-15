<?php

public Connection getConnectionPostgreSQL() {
    try{
        return DriverManager.getConnection(
            "jdbc:postgresql://"
            +"ec2-54-85-56-210.compute-1.amazonaws.com/"
            +"dfopd816p36hgh",
            "vivuuvngcdbszv",
            "8b0e2945b9a7a493843837d2fd2c22585136ce20f859ee51517857780f47ebf1");
    } catch (SQLException e) {
        throw new RuntimeException(e);
    }
}
?>