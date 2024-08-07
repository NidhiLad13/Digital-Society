-- rdbms ass --

--1.employee 
CREATE TABLE Employee22
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
