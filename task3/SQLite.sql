CREATE FUNCTION CalculateSalary(employee_id INTEGER) RETURNS INTEGER AS
BEGIN
    DECLARE salary INTEGER;
    SELECT Salary INTO salary FROM Employees WHERE EmployeeID = employee_id;
    RETURN salary;
END;