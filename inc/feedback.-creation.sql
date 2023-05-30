DROP TABLE IF EXISTS feedback;
CREATE TABLE feedback (
  id int(11) NOT NULL auto_increment primary key,
  FullName varchar(50) NOT NULL,
  email varchar(50) NOT NULL,
  feed varchar(255) NOT NULL,
  date date DEFAULT curdate()
)
