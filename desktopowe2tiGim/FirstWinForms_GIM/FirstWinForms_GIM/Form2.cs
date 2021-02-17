using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace FirstWinForms_GIM
{
    public partial class Form2 : Form
    {
        public Form2()
        {
            InitializeComponent();
        }

        private void Exit_Click(object sender, EventArgs e)
        {
            Close();
        }

        private void btnShow_Click(object sender, EventArgs e) {

            string imie = tbImie.Text.Trim();
            string nazwisko = tbNazwisko.Text.Trim();
            if (!String.IsNullOrEmpty(imie)  && !String.IsNullOrEmpty(nazwisko)) {
                lbWynik.ForeColor = Color.Green;
                lbWynik.Text = $"Witaj {imie} {nazwisko}" + Environment.NewLine + "Dzisiaj mamy .....";
            }
            else {
                lbWynik.ForeColor = Color.Red;
                lbWynik.Text = "Proszę się przedstawić!!!";
            }
        }
    }
}
