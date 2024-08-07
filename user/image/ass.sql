-- rdbms ass --

--1.employee 
CREATE TABLE Employee
(
	emp_id VARCHAR2(20) PRIMARY KEY, 
	emp_name VARCHAR2(20) NOT NULL,
	emp_dept VARCHAR2(20) CHECK(emp_dept in('HR','Accounts','Planning','Development')),
	emp_designation VARCHAR2(20) CHECK(emp_designation IN('executive','team leader', 'manager','CEO')),
	joining_date DATE,
	basic_salary NUMBER(10) CHECK(basic_salary>0),
	da NUMBER(20),
	net_salary NUMBER(20) check(net_salary = basic_salary+ da),
	CONSTRAINT em check( emp_id LIKE('EM%%%'))
);
-- Quary 
 1. alter TABLE employee ADD bonus NUMBER(20) DEFAULT 0; 
 2. alter TABLE employee RENAME COLUMN joining_date TO DOJ;
 3. alter TABLE employee RENAME TO emp_master;
 4. ALTER TABLE emp_master MODIFY emp_name VARCHAR2(30);
  ALTER TABLE emp_master MODIFY net_salary NUMBER(20) CONSTRAINTS chk CHECK(net_salary = basic_salary+da);
 
-- INSERT data.... 
INSERT INTO emp_master  (emp_id,emp_name,emp_dept,emp_designation,DOJ,basic_salary) VALUES ('EM501','shaggy','Development','executive','05-jun-10',35000);
INSERT INTO emp_master  (emp_id,emp_name,emp_dept,emp_designation,DOJ,basic_salary) VALUES ('EM502','bob','HR','manager','15-apr-05',75000);
INSERT INTO emp_master  (emp_id,emp_name,emp_dept,emp_designation,DOJ,basic_salary) VALUES ('EM503','dexter','Planning','manager','01-aug-07',72000);
INSERT INTO emp_master  (emp_id,emp_name,emp_dept,emp_designation,DOJ,basic_salary) VALUES ('EM504','velma','Development','team leader','01-oct-05',60000);
INSERT INTO emp_master  (emp_id,emp_name,emp_dept,emp_designation,DOJ,basic_salary) VALUES ('EM505','donald','Development','executive','01-sep-03',55000);
INSERT INTO emp_master  (emp_id,emp_name,emp_dept,emp_designation,DOJ,basic_salary) VALUES ('EM506','fred','Accounts','executive','01-oct-10',45000);
INSERT INTO emp_master  (emp_id,emp_name,emp_dept,emp_designation,DOJ,basic_salary) VALUES ('EM507','olive','Accounts','manager','01-feb-00',88000);
INSERT INTO emp_master  (emp_id,emp_name,emp_dept,emp_designation,DOJ,basic_salary) VALUES ('EM508','popeye','HR','executive','02-may-07',38000);
INSERT INTO emp_master  (emp_id,emp_name,emp_dept,emp_designation,DOJ,basic_salary) VALUES ('EM509','phineas','Planning','executive','05-aug-09',42000);


-- UPDATE TABLE...

UPDATE emp_master set da = basic_salary * 0.1;
UPDATE emp_master set net_salary = da + basic_salary;
UPDATE emp_master set bonus = 1000 WHERE emp_designation = 'executive';
UPDATE emp_master set bonus = 3000 WHERE emp_designation = 'team leader';
UPDATE emp_master set bonus = 5000 WHERE emp_designation = 'manager';

 --2.relational schema
 
 CREATE TABLE student
 (
	rollno NUMBER(10) PRIMARY KEY,
	name VARCHAR2(20) NOT NULL,
	dob date,
	gender VARCHAR2(6) CHECK(gender in('male' ,'female')),
	doa DATE,
	bcode VARCHAR(20)
 );
 CREATE TABLE branch
 (
	bcode VARCHAR2(20) PRIMARY key check (bcode LIKE 'b%'),
	bname VARCHAR2(20) NOT NULL,
	dno NUMBER (10)
 );
 CREATE TABLE department 
 (	
	dno VARCHAR2(20) PRIMARY KEY,
	dname VARCHAR2(20) 
 );
 CREATE TABLE course
 (
	ccode VARCHAR2(20) PRIMARY KEY,
	cname VARCHAR(20),
	credits VARCHAR2(20) CHECK(credits BETWEEN 1 and 5),
	dno VARCHAR2(20)
 );
 CREATE TABLE branch_course
 (
	bcode VARCHAR2(20) PRIMARY KEY,
	ccode VARCHAR2(20) ,
	semester VARCHAR2(20) CHECK(semester BETWEEN 'sem1' and 'sem6')
 );
 CREATE TABLE enrolls
 (
	rollno VARCHAR(20)PRIMARY KEY, 
	ccode VARCHAR2(20),
	grade VARCHAR2(20) CHECK( grade IN('s','a','b','c','d','e','u') )
 );
