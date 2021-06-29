# Domestic Airlines Management System

The purpose of this project, titled ‘**Domestic Airlines Management System**’ is to computerize the front-office management of the Airline institution using software that is fast, simple, user-friendly, and cost-effective. It deals with the collection of passengers’ information, booking date, destination, etc. Traditionally, it was done manually. The main function of the system is to register and store passenger and flight details, and retrieve those details as and when required, and to manipulate these details meaningfully.

## Database Design 

1. **Passengers**: PassengerID, Name, Address, Age
2. **Contact_Info**: Email, PhoneNo., State
3. **State**: StID, StateName, Country
4. **Transactions**: TransacID, Passengers, BookingGate, Flights, DepartureDate, Employees, Type, Charges
5. **Flight_Schedules**: FLID, Aircraft, Netfare, ArrivalTime, DepartureTime
6. **Airfare**: AFID, Fare, Route
7. **Aircrafts**: ACID, Capacity, MfdBy
8. **Branches**: BrID, Center, Address, State
9. **Employee**: TransacID, Passengers, BookingDate, Flights, DepartureDate, Employees, Type, Charges
10. **Route**: RtID, Destination, Airport

## Relational Model

Please check detailed description for this section in the Project Synopsis File. It includes all the required information for:

 - Relational Model 
 - Entity Relationship Diagram 
 - Cardinality 
 - DDL Commands- Create Table 
 - Schemas 
 - DML Commands - Insert Table

## Making Project Functional

This section discusses in detail, about how we made our Project Functional with Graphical User Interface: 
1. **User Interface:** The project's GUI has been made through web pages written in HTML and design elegantly with CSS for it to be attractive 
2. **Back-end:** PHP is being used along with HTML and CSS as a medium to make a connection with the database.
3. **Database:** All the database used in this project is being created on the MYSQL Workbench by writing SQL commands. 
4. **Server:** PHP, SQL Workbench Database are all connected with HTML-CSS GUI by establishing a server on the localhost by using WAMP Server, which helps us in running the project successfully

## Running Wamp Server

 - Adding Project Files in the working directory of the WAMP Server
 - Storing DBMS Website folder in **www** directory. 
 - Running a **localhost** server. 
 - Opening project files on WAMP SERVER by typing **localhost/DBMS/index.html**

 
## Project Functionalities

The project SQL Queries are written according to the range of functionalities, we are providing to our users ( Both Employees and Customer) with a constraint on them following their usage rights. 

The functionalities, which we are providing range from simple displaying of records to booking tickets to making a constraint on users by making a login form. (As a result, it divides the services accordingly different for both customers and Employees). 

## List of Project Functionalities & their segmentation

We are thereby, segmenting the usage of services on the basis of users are who are required to login (Customers & Employees) and the services which can be viewed without login.

**Section 1: With Login (Employee)**
 - Add New Data  
 - Delete Existing Data  
 - See Employees Record

**Section 2: With Login (Customer)**
 - Booking Flight Tickets 
 - Search Flights

**Section 3: Without Login**
 - **Access Services Section:** See database of Airfares , Aircraft, States
   we serve, Running flight schedules, Currently running routes, &
   Employees record
 - New Customer Sign Up
 - New Employee Joinee

## Project Members

**Mayank Jhanwar**
*B.Tech | Computer and Communication Engineering | Manipal University *Jaipur*
manipal.189303179@muj.manipal.edu*

**Namit Varshney**
*B.Tech | Computer Science Engineering | Manipal University Jaipur
namit.189303182@muj.manipal.edu*
