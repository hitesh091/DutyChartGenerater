DutyChartGenerater
==================
Duty chart generater is a project in PHP and MySQL that i developed during my one month of internship at National Informatic Center divison at SCI.

Basically, it's an automatic schedule generator for chauffers in an organisation over a month or so. The project had some constraints like:
  -> The Chauffers had to be divided in groups of three with different time slots (Shifts) but equal intervals i.e. 8 hours each.
  -> If a person at works at night shift (i.e third slot), he must be on leave the next day.
  -> The schedule must be kept fixed for at least a week, like if a person works in first shift then he has to work the whole week in       this time slot only.
  -> Schedule have to be changed every week.
  -> Each person had to be given 1 day leave other than national holidays.
  
  
To implement this, the UI is implemented in HTML, CSS and PHP , and the database part is connected through MySQL commands.

So now to generate the chart, you just need to sign up first on the website and then login. Click the 'Generate duty chart' link and you are done!!

