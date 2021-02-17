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
    public partial class Form1 : Form {
        private DateTime dt;
        private MainWindow window;
        public Form1(MainWindow window) {
            this.window = window;
            InitializeComponent();
            dt = DateTime.Now;
            this.window.GeTextBox().Text += "Otwarcie okienka: "+this.Text+" " + DateTime.Now.ToLongTimeString() + Environment.NewLine;
        }

        private void Click_Btn1(object sender, EventArgs e) {
            DateTime dt2 = DateTime.Now;
            label1.Text = (dt2-dt).TotalSeconds.ToString();
            dt = dt2;
        }

        private void Form1_FormClosed(object sender, FormClosedEventArgs e)
        {
            window.GeTextBox().Text += "Zamknięcie okienka: "+this.Text+" " + DateTime.Now.ToLongTimeString() + Environment.NewLine;
        }
    }
    
}
