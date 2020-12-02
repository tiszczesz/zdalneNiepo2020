using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Obiektowe_GIM1
{
    public class Student : Person
    {
        public List<int> Marks { get; set; }

        public double? GetAVGMarks() {
            return Marks?.Average();
        }

        public Student()
        {
            Marks = new List<int>();
        }

        public Student(string firstName,string lastName,DateTime birth,List<int> marks)
        :base(firstName,lastName,birth) {
            //FirstName = firstName;
            Marks = marks;
        }
    }
}
