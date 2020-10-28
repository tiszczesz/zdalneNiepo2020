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
            Console.WriteLine("Ilosc studentow w grupie: "+Students.Length);
            Console.WriteLine("Ilosc studentow pelnoletnich: " + countAdultStudents());
            foreach (Student s in Students) {
                Console.WriteLine(s.ShowStudent());
            }
            Console.WriteLine("===============================================");
            getAdd();
        }

        public SetOfStudents() {
            fillStudents();
        }
        private void fillStudents() {
            if(Students==null) Students = new Student[6];
            Students[0] = new Student("Adam","Glowa",15,"1A");
            Students[1] = new Student("Tomasz", "Torek", 15, "1A");
            Students[2] = new Student("Monika", "Rybnik", 16, "1A");
            Students[3] = new Student("Ryszard", "Glowa", 15, "1A");
            Students[4] = new Student("Boleslaw", "Kowalski", 15, "1A");
            Students[5] = new Student("Boleslaw", "Kowalski", 21, "1A");
        }

        private int countAdultStudents() {
            int result = 0;
            foreach (var student in Students) {
                if (student.IsAdult()) result++;
            }

            return result;
        }

        private void getAdd() {
            var result = Students.AsEnumerable().Where(s => s.Age % 2 == 0).ToArray();
            foreach (var s in result) {
                Console.WriteLine(s.ShowStudent());
            }
        }
    }
}
