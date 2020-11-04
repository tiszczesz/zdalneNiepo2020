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
           
        }

        public SetOfStudents() {
            fillStudents();
        }
        private void fillStudents() {
            if(Students==null) Students = new Student[7];
            Students[0] = new Student("Adam","Glowa",15,"1A",5.0);
            Students[1] = new Student("Tomasz", "Torek", 15, "1A",4.0);
            Students[2] = new Student("Monika", "Rybnik", 16, "1A",3.75);
            Students[3] = new Student("Ryszard", "Glowa", 15, "1A",2.5);
            Students[4] = new Student("Boleslaw", "Kowalski", 15, "1A");
            Students[5] = new Student("Boleslaw", "Kowalski", 21, "1A",2.0);
            Students[6] = new Student(){Age = 23,AvgGrade = 6.0,Division = "1A",LastName = "Rybnicka",FirstName = "Anna"};
        }

        private int countAdultStudents() {
            int result = 0;
            foreach (var student in Students) {
                if (student.IsAdult()) result++;
            }

            return result;
        }

        public void ShowAllAbove(double avg) {
            Student[] list = Students.Where(s => s.AvgGrade >= avg).ToArray();
            foreach (Student student in list) {
                Console.WriteLine(student.ShowStudent());
            }
        }

        public void ShowAllBelow(double avg) {
            Student[] list = Students.Where(s => s.AvgGrade < avg).ToArray();
            foreach (Student student in list)
            {
                Console.WriteLine(student.ShowStudent());
            }
        }

        public int CountAllBetween(int low, int up) {
            return Students.Where(s => (s.Age >= low && s.Age <= up)).ToArray().Length;
           //return Students.Count(s => (s.Age >= low && s.Age <= up));
        }
       
    }
}
