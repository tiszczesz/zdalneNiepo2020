using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace WinEF_1My
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            using (var context = new AuthorContext())
            {
                context.Database.EnsureCreated();
                var authors = new List<Author>
                {
                    new Author { FirstName="Carson", LastName="Alexander", BirthDate = DateTime.Parse("1985-09-01")},
                    new Author { FirstName="Meredith", LastName="Alonso", BirthDate = DateTime.Parse("1970-09-01")},
                    new Author { FirstName="Arturo", LastName="Anand", BirthDate = DateTime.Parse("1963-09-01")},
                    new Author { FirstName="Gytis", LastName="Barzdukas", BirthDate = DateTime.Parse("1988-09-01")},
                    new Author { FirstName="Yan", LastName="Li", BirthDate = DateTime.Parse("2000-09-01")},
                };

                context.Authors.AddRange(authors);
                context.SaveChanges();

                dataGridView1.DataSource = authors;
            }
        }
    }
}
