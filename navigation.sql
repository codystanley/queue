-- Create the main_nav table
CREATE TABLE main_nav (
  id INT PRIMARY KEY AUTO_INCREMENT,
  label VARCHAR(255),
  url VARCHAR(255),
  is_enable BOOLEAN
);

ALTER TABLE main_nav AUTO_INCREMENT=100;

-- Create the sub_nav table
CREATE TABLE sub_nav (
  id INT PRIMARY KEY AUTO_INCREMENT,
  main_nav_id INT,
  label VARCHAR(255),
  url VARCHAR(255),
  ordering INT,
  is_enabled BOOLEAN,
  FOREIGN KEY (main_nav_id) REFERENCES main_nav(id)
);

ALTER TABLE sub_nav AUTO_INCREMENT=100;

CREATE TABLE sub_sub_nav (
  id INT PRIMARY KEY AUTO_INCREMENT,
  sub_nav_id INT,
  label VARCHAR(255),
  url VARCHAR(255),
  ordering INT,
  is_enabled BOOLEAN,
  FOREIGN KEY (sub_nav_id) REFERENCES sub_nav(id)
);

ALTER TABLE sub_sub_nav AUTO_INCREMENT=100;
