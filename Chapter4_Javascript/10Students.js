class Student {
    students = [];
    constructor(id, name, address, email) {
        this.id = id;
        this.name = name;
        this.address = address;
        this.email = email;
    }
    addStudent() {
        const id = prompt("Enter student id:")
        const name = prompt("Enter the student's name");
        const address = prompt("Enter student address");
        const email = prompt("Enter student email");
        const student = new Student(id, name, address, email);
        this.students.push(student); // Add new student to the array
    }
    printStudentInfo() {
        document.write("<h3>Students</h3>");
        const list = document.createElement("ul"); // Create the list as an HTML element
        for (const student of this.students) { // Fill it with data
            list.innerHTML += `<li><strong>Id</strong>: ${student.id}</li>`;
            list.innerHTML += `<li><strong>Name</strong>: ${student.name}</li>`;
            list.innerHTML += `<li><strong>Address</strong>: ${student.address}</li>`;
            list.innerHTML += `<li><strong>Email</strong>: ${student.email}</li><br>`;
        }
        document.body.appendChild(list); // Append the element to the page body
    }
}
const stobj = new Student(1, "harendra", "naikap", "abc@gmail.com");
document.write("<ul>");
document.write("<li><strong>Id</strong>:" + stobj.id + "</li>");
document.write("<li><strong>Name</strong>:" + stobj.name + "</li>");
document.write("<li><strong>Address</strong>:" + stobj.address + "</li>");
document.write("<li><strong>Email</strong>:" + stobj.email + "</li>");
document.write("</ul>");
stobj.addStudent();
stobj.printStudentInfo();