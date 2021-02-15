using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace WinForms_cw1_5Net
{
    public partial class Form2 : Form {
        private DateTime dtp = DateTime.Now;
        private MainWindow form;
        public Form2(MainWindow form=null)
        {
            InitializeComponent();
            this.form = form;
            form.GeTextBox().Text += $"Okienko utworzono: {DateTime.Now.ToLongTimeString()}"+
                Environment.NewLine;
        }

        private void ButtonClick(object sender, EventArgs e)
        {
            DateTime dtk = DateTime.Now;
            label1.Text += "Kliknięto przycisk: " +Math.Round((dtk-dtp).TotalSeconds,3)+Environment.NewLine;
            dtp = dtk;
        }

        private void Close_Form1(object sender, FormClosedEventArgs e) {
            this.form.GeTextBox().Text += $"Zamknięcie okienka: {DateTime.Now.ToLongTimeString()}"+
                Environment.NewLine;
        }
    }
}
