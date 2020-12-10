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
            return Marks != null && Marks.Count > 0 ? Marks.Average() : (double?) null;
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

        private string getMarks() {
            StringBuilder sb = new StringBuilder();
            if(Marks==null || Marks?.Count==0) return "brak ocen";
            sb.Append("Lista ocen: ");
            foreach (var mark in Marks) {
                sb.Append(mark).Append(" ");
            }
            var s = string.Format("{0:0.00}", GetAVGMarks());
            sb.Append(" Srednia ocen: ").Append(s);
            return sb.ToString();
        }
        public string Info() {
            return base.Info() + Environment.NewLine + getMarks();
        }
    }
}
