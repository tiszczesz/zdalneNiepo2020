using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace WinForms_cw1_5Net
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
           // string path = Directory.GetCurrentDirectory();
           // var all = Directory.GetFiles(path);
        }

        private void BtnWynik_Click(object sender, EventArgs e) {
            //todo walidacja pustego imienia i nazwiska -->szkoda że nie chcesz się przedstawić
            lbWynik.Text = "Witamy w krainie WindowForms:" + Environment.NewLine;
            lbWynik.Text += txtBoxImie.Text + " " + txtBoxNazwisko.Text;
           // lbWynik.Text += $"{txtBoxImie.Text} {txtBoxNazwisko.Text}";
        }

        private void btnExit_Click(object sender, EventArgs e)
        {
            Close();
        }
    }
}
