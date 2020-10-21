using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Cw1Zdalne
{
    class SetOfStudents {
        private Student[] students;

        public Student[] Students {
            get { return students; }
            set { students = value; }
        }

        public void ShowAll() {
            foreach (Student s in Students) {
                Console.WriteLine(s.ShowStudent());
            }
        }

        public SetOfStudents() {
            fillStudents();
        }
        private void fillStudents() {
            if(Students==null) Students = new Student[5];
            Students[0] = new Student("Adam","Glowa",15,"1A");
            Students[1] = new Student("Tomasz", "Torek", 15, "1A");
            Students[2] = new Student("Monika", "Rybnik", 15, "1A");
            Students[3] = new Student("Ryszard", "Glowa", 15, "1A");
            Students[4] = new Student("Boleslaw", "Kowalski", 15, "1A");
        }
    }
}
