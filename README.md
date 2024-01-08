I used a local server (XAMPP) and connected to a local MySQL database.

I created the following tables through phpMyAdmin:

students: information about students (student_id, name, class).
teachers: information about teachers (teacher_id, name, course).
grades: information about student grades (grade_id, student_id, teacher_id, course, grade, grade_date).
absences: information about absences (absence_id, student_id, teacher_id, course, absence_grade, motivated).

I created a PHP file (controller.php) that includes the database connection and stores the results of necessary queries for displaying the outcomes.

I created an index.php file representing the main page with 4 buttons ('media pe clasa', 'media pe scoala', 'cele mai multe absente', 'top 3 medii').

Upon clicking each button, you are redirected to a different page within which the data obtained from controller.php is processed and displayed.
