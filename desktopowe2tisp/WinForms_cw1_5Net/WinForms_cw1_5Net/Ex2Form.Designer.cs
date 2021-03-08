
namespace WinForms_cw1_5Net
{
    partial class Ex2Form
    {
        /// <summary>
        ///  Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        ///  Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        ///  Required method for Designer support - do not modify
        ///  the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.label1 = new System.Windows.Forms.Label();
            this.txtBoxImie = new System.Windows.Forms.TextBox();
            this.txtBoxNazwisko = new System.Windows.Forms.TextBox();
            this.label2 = new System.Windows.Forms.Label();
            this.label3 = new System.Windows.Forms.Label();
            this.lbWynik = new System.Windows.Forms.Label();
            this.btnWynik = new System.Windows.Forms.Button();
            this.btnExit = new System.Windows.Forms.Button();
            this.cbClass = new System.Windows.Forms.ComboBox();
            this.label4 = new System.Windows.Forms.Label();
            this.label5 = new System.Windows.Forms.Label();
            this.groupBox1 = new System.Windows.Forms.GroupBox();
            this.rBtnOther = new System.Windows.Forms.RadioButton();
            this.rBtnMale = new System.Windows.Forms.RadioButton();
            this.rBtnFemale = new System.Windows.Forms.RadioButton();
            this.cbAgree = new System.Windows.Forms.CheckBox();
            this.panel1 = new System.Windows.Forms.Panel();
            this.groupBox1.SuspendLayout();
            this.panel1.SuspendLayout();
            this.SuspendLayout();
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Font = new System.Drawing.Font("Segoe UI", 22.2F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point);
            this.label1.ForeColor = System.Drawing.SystemColors.HotTrack;
            this.label1.Location = new System.Drawing.Point(12, 9);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(331, 50);
            this.label1.TabIndex = 0;
            this.label1.Text = "Okienko pierwsze";
            // 
            // txtBoxImie
            // 
            this.txtBoxImie.Location = new System.Drawing.Point(124, 80);
            this.txtBoxImie.Name = "txtBoxImie";
            this.txtBoxImie.Size = new System.Drawing.Size(219, 27);
            this.txtBoxImie.TabIndex = 1;
            // 
            // txtBoxNazwisko
            // 
            this.txtBoxNazwisko.Location = new System.Drawing.Point(124, 130);
            this.txtBoxNazwisko.Name = "txtBoxNazwisko";
            this.txtBoxNazwisko.Size = new System.Drawing.Size(219, 27);
            this.txtBoxNazwisko.TabIndex = 2;
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Location = new System.Drawing.Point(80, 83);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(41, 20);
            this.label2.TabIndex = 3;
            this.label2.Text = "Imię:";
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.Location = new System.Drawing.Point(46, 133);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(75, 20);
            this.label3.TabIndex = 4;
            this.label3.Text = "Nazwisko:";
            // 
            // lbWynik
            // 
            this.lbWynik.BackColor = System.Drawing.SystemColors.Info;
            this.lbWynik.Dock = System.Windows.Forms.DockStyle.Right;
            this.lbWynik.Location = new System.Drawing.Point(374, 0);
            this.lbWynik.Name = "lbWynik";
            this.lbWynik.Size = new System.Drawing.Size(451, 681);
            this.lbWynik.TabIndex = 5;
            // 
            // btnWynik
            // 
            this.btnWynik.Location = new System.Drawing.Point(124, 449);
            this.btnWynik.Name = "btnWynik";
            this.btnWynik.Size = new System.Drawing.Size(219, 71);
            this.btnWynik.TabIndex = 6;
            this.btnWynik.Text = "Zatwierdź Dane";
            this.btnWynik.UseVisualStyleBackColor = true;
            this.btnWynik.Click += new System.EventHandler(this.BtnWynik_Click);
            // 
            // btnExit
            // 
            this.btnExit.Anchor = ((System.Windows.Forms.AnchorStyles)((System.Windows.Forms.AnchorStyles.Bottom | System.Windows.Forms.AnchorStyles.Right)));
            this.btnExit.Location = new System.Drawing.Point(124, 23);
            this.btnExit.Name = "btnExit";
            this.btnExit.Size = new System.Drawing.Size(219, 71);
            this.btnExit.TabIndex = 7;
            this.btnExit.Text = "Wyjście";
            this.btnExit.UseVisualStyleBackColor = true;
            this.btnExit.Click += new System.EventHandler(this.btnExit_Click);
            // 
            // cbClass
            // 
            this.cbClass.DropDownStyle = System.Windows.Forms.ComboBoxStyle.DropDownList;
            this.cbClass.FormattingEnabled = true;
            this.cbClass.Items.AddRange(new object[] {
            "1A",
            "1B",
            "1C",
            "1TI",
            "1TP"});
            this.cbClass.Location = new System.Drawing.Point(124, 177);
            this.cbClass.Name = "cbClass";
            this.cbClass.Size = new System.Drawing.Size(219, 28);
            this.cbClass.TabIndex = 8;
            // 
            // label4
            // 
            this.label4.AutoSize = true;
            this.label4.Location = new System.Drawing.Point(71, 180);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(47, 20);
            this.label4.TabIndex = 9;
            this.label4.Text = "Klasa:";
            // 
            // label5
            // 
            this.label5.AutoSize = true;
            this.label5.Location = new System.Drawing.Point(79, 231);
            this.label5.Name = "label5";
            this.label5.Size = new System.Drawing.Size(39, 20);
            this.label5.TabIndex = 10;
            this.label5.Text = "Płeć:";
            // 
            // groupBox1
            // 
            this.groupBox1.Controls.Add(this.rBtnOther);
            this.groupBox1.Controls.Add(this.rBtnMale);
            this.groupBox1.Controls.Add(this.rBtnFemale);
            this.groupBox1.Location = new System.Drawing.Point(124, 231);
            this.groupBox1.Name = "groupBox1";
            this.groupBox1.Size = new System.Drawing.Size(219, 146);
            this.groupBox1.TabIndex = 11;
            this.groupBox1.TabStop = false;
            this.groupBox1.Text = "Wybór płci:";
            // 
            // rBtnOther
            // 
            this.rBtnOther.AutoSize = true;
            this.rBtnOther.Checked = true;
            this.rBtnOther.Location = new System.Drawing.Point(16, 99);
            this.rBtnOther.Name = "rBtnOther";
            this.rBtnOther.Size = new System.Drawing.Size(58, 24);
            this.rBtnOther.TabIndex = 2;
            this.rBtnOther.TabStop = true;
            this.rBtnOther.Text = "Inna";
            this.rBtnOther.UseVisualStyleBackColor = true;
            // 
            // rBtnMale
            // 
            this.rBtnMale.AutoSize = true;
            this.rBtnMale.Location = new System.Drawing.Point(16, 66);
            this.rBtnMale.Name = "rBtnMale";
            this.rBtnMale.Size = new System.Drawing.Size(102, 24);
            this.rBtnMale.TabIndex = 1;
            this.rBtnMale.Text = "Mężczyzna";
            this.rBtnMale.UseVisualStyleBackColor = true;
            // 
            // rBtnFemale
            // 
            this.rBtnFemale.AutoSize = true;
            this.rBtnFemale.Location = new System.Drawing.Point(16, 33);
            this.rBtnFemale.Name = "rBtnFemale";
            this.rBtnFemale.Size = new System.Drawing.Size(82, 24);
            this.rBtnFemale.TabIndex = 0;
            this.rBtnFemale.Text = "Kobieta";
            this.rBtnFemale.UseVisualStyleBackColor = true;
            // 
            // cbAgree
            // 
            this.cbAgree.AutoSize = true;
            this.cbAgree.Location = new System.Drawing.Point(140, 383);
            this.cbAgree.Name = "cbAgree";
            this.cbAgree.Size = new System.Drawing.Size(192, 44);
            this.cbAgree.TabIndex = 12;
            this.cbAgree.Text = "Zgoda na przetwarzanie\r\n danych osobowych";
            this.cbAgree.UseVisualStyleBackColor = true;
            // 
            // panel1
            // 
            this.panel1.Controls.Add(this.btnExit);
            this.panel1.Dock = System.Windows.Forms.DockStyle.Bottom;
            this.panel1.Location = new System.Drawing.Point(0, 570);
            this.panel1.Name = "panel1";
            this.panel1.Size = new System.Drawing.Size(374, 111);
            this.panel1.TabIndex = 13;
            // 
            // Ex2Form
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 20F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(825, 681);
            this.Controls.Add(this.panel1);
            this.Controls.Add(this.cbAgree);
            this.Controls.Add(this.groupBox1);
            this.Controls.Add(this.label5);
            this.Controls.Add(this.label4);
            this.Controls.Add(this.cbClass);
            this.Controls.Add(this.btnWynik);
            this.Controls.Add(this.lbWynik);
            this.Controls.Add(this.label3);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.txtBoxNazwisko);
            this.Controls.Add(this.txtBoxImie);
            this.Controls.Add(this.label1);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.FixedSingle;
            this.MaximizeBox = false;
            this.MinimizeBox = false;
            this.Name = "Ex2Form";
            this.Text = "Ćwiczenie 2";
            this.FormClosed += new System.Windows.Forms.FormClosedEventHandler(this.Form1_FormClosed);
            this.Load += new System.EventHandler(this.Form1_Load);
            this.groupBox1.ResumeLayout(false);
            this.groupBox1.PerformLayout();
            this.panel1.ResumeLayout(false);
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.TextBox txtBoxImie;
        private System.Windows.Forms.TextBox txtBoxNazwisko;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.Label lbWynik;
        private System.Windows.Forms.Button btnWynik;
        private System.Windows.Forms.Button btnExit;
        private System.Windows.Forms.ComboBox cbClass;
        private System.Windows.Forms.Label label4;
        private System.Windows.Forms.Label label5;
        private System.Windows.Forms.GroupBox groupBox1;
        private System.Windows.Forms.RadioButton rBtnOther;
        private System.Windows.Forms.RadioButton rBtnMale;
        private System.Windows.Forms.RadioButton rBtnFemale;
        private System.Windows.Forms.CheckBox cbAgree;
        private System.Windows.Forms.Panel panel1;
    }
}

