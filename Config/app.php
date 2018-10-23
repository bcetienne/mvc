<?php
  /**
   * Configuration information
   */
  return [
    /**
     * Datasources configuration
     */
    'Datasources' => [
      'host' => 'localhost',
      'database' => 'mvc',
      'username' => 'root',
      'password' => 'root'
    ]
  ];


  CREATE TABLE salaries
  (
      id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
      firstname VARCHAR(100),    ->     lastname VARCHAR(100),
      email VARCHAR(255),
      salaire SMALLINT
  );

  INSERT INTO salaries (firstname, lastname, email, salaire) VALUES ('Maxime', 'Larousse', 'maxime@mail.com', 1546), ('Jean', 'Bechrel', 'jean@mail.com', 1852), ('Lea', 'Atlas', 'atlas@mail.com', 2000)