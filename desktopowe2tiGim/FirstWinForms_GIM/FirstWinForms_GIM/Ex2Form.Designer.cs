
namespace FirstWinForms_GIM
{
    partial class Ex2Form
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
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
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.label1 = new System.Windows.Forms.Label();
            this.btnExit = new System.Windows.Forms.Button();
            this.label2 = new System.Windows.Forms.Label();
            this.label3 = new System.Windows.Forms.Label();
            this.tbImie = new System.Windows.Forms.TextBox();
            this.tbNazwisko = new System.Windows.Forms.TextBox();
            this.button1 = new System.Windows.Forms.Button();
            this.lbWynik = new System.Windows.Forms.Label();
            this.panel1 = new System.Windows.Forms.Panel();
            this.radioBFemale = new System.Windows.Forms.RadioButton();
            this.radioBMale = new System.Windows.Forms.RadioButton();
            this.groupBox1 = new System.Windows.Forms.GroupBox();
            this.rdioBOther = new System.Windows.Forms.RadioButton();
            this.comboBEduction = new System.Windows.Forms.ComboBox();
            this.label4 = new System.Windows.Forms.Label();
            this.cbAgree = new System.Windows.Forms.CheckBox();
            this.panel1.SuspendLayout();
            this.groupBox1.SuspendLayout();
            this.SuspendLayout();
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Font = new System.Drawing.Font("Segoe UI", 25.8F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point);
            this.label1.ForeColor = System.Drawing.SystemColors.HotTrack;
            this.label1.Location = new System.Drawing.Point(106, 0);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(554, 59);
            this.label1.TabIndex = 0;
            this.label1.Text = "Jakie fajne okienko drugie";
            // 
            // btnExit
            // 
            this.btnExit.Anchor = ((System.Windows.Forms.AnchorStyles)((System.Windows.Forms.AnchorStyles.Bottom | System.Windows.Forms.AnchorStyles.Right)));
            this.btnExit.Location = new System.Drawing.Point(683, 11);
            this.btnExit.Name = "btnExit";
            this.btnExit.Size = new System.Drawing.Size(116, 41);
            this.btnExit.TabIndex = 1;
            this.btnExit.Text = "Zamknij";
            this.btnExit.UseVisualStyleBackColor = true;
            this.btnExit.Click += new System.EventHandler(this.Exit_Click);
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Location = new System.Drawing.Point(70, 101);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(41, 20);
            this.label2.TabIndex = 2;
            this.label2.Text = "Imię:";
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.Location = new System.Drawing.Point(36, 153);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(75, 20);
            this.label3.TabIndex = 3;
            this.label3.Text = "Nazwisko:";
            // 
            // tbImie
            // 
            this.tbImie.Location = new System.Drawing.Point(130, 98);
            this.tbImie.Name = "tbImie";
            this.tbImie.Size = new System.Drawing.Size(209, 27);
            this.tbImie.TabIndex = 4;
            // 
            // tbNazwisko
            // 
            this.tbNazwisko.Location = new System.Drawing.Point(130, 150);
            this.tbNazwisko.Name = "tbNazwisko";
            this.tbNazwisko.Size = new System.Drawing.Size(209, 27);
            this.tbNazwisko.TabIndex = 5;
            // 
            // button1
            // 
            this.button1.Location = new System.Drawing.Point(130, 508);
            this.button1.Name = "button1";
            this.button1.Size = new System.Drawing.Size(209, 69);
            this.button1.TabIndex = 6;
            this.button1.Text = "Pokaż";
            this.button1.UseVisualStyleBackColor = true;
            this.button1.Click += new System.EventHandler(this.btnShow_Click);
            // 
            // lbWynik
            // 
            this.lbWynik.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(255)))), ((int)(((byte)(255)))), ((int)(((byte)(128)))));
            this.lbWynik.Font = new System.Drawing.Font("Segoe UI", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point);
            this.lbWynik.Location = new System.Drawing.Point(379, 59);
            this.lbWynik.Name = "lbWynik";
            this.lbWynik.Size = new System.Drawing.Size(409, 518);
            this.lbWynik.TabIndex = 7;
            // 
            // panel1
            // 
            this.panel1.Controls.Add(this.btnExit);
            this.panel1.Dock = System.Windows.Forms.DockStyle.Bottom;
            this.panel1.Location = new System.Drawing.Point(0, 606);
            this.panel1.Name = "panel1";
            this.panel1.Size = new System.Drawing.Size(819, 66);
            this.panel1.TabIndex = 8;
            // 
            // radioBFemale
            // 
            this.radioBFemale.AutoSize = true;
            this.radioBFemale.Location = new System.Drawing.Point(118, 35);
            this.radioBFemale.Name = "radioBFemale";
            this.radioBFemale.Size = new System.Drawing.Size(82, 24);
            this.radioBFemale.TabIndex = 9;
            this.radioBFemale.Text = "Kobieta";
            this.radioBFemale.UseVisualStyleBackColor = true;
            // 
            // radioBMale
            // 
            this.radioBMale.AutoSize = true;
            this.radioBMale.Location = new System.Drawing.Point(118, 65);
            this.radioBMale.Name = "radioBMale";
            this.radioBMale.Size = new System.Drawing.Size(102, 24);
            this.radioBMale.TabIndex = 10;
            this.radioBMale.Text = "Mężczyzna";
            this.radioBMale.UseVisualStyleBackColor = true;
            // 
            // groupBox1
            // 
            this.groupBox1.Controls.Add(this.rdioBOther);
            this.groupBox1.Controls.Add(this.radioBMale);
            this.groupBox1.Controls.Add(this.radioBFemale);
            this.groupBox1.Location = new System.Drawing.Point(12, 210);
            this.groupBox1.Name = "groupBox1";
            this.groupBox1.Size = new System.Drawing.Size(327, 134);
            this.groupBox1.TabIndex = 11;
            this.groupBox1.TabStop = false;
            this.groupBox1.Text = "Wybierz płeć";
            // 
            // rdioBOther
            // 
            this.rdioBOther.AutoSize = true;
            this.rdioBOther.Checked = true;
            this.rdioBOther.Location = new System.Drawing.Point(118, 96);
            this.rdioBOther.Name = "rdioBOther";
            this.rdioBOther.Size = new System.Drawing.Size(58, 24);
            this.rdioBOther.TabIndex = 11;
            this.rdioBOther.TabStop = true;
            this.rdioBOther.Text = "Inna";
            this.rdioBOther.UseVisualStyleBackColor = true;
            // 
            // comboBEduction
            // 
            this.comboBEduction.DropDownStyle = System.Windows.Forms.ComboBoxStyle.DropDownList;
            this.comboBEduction.ForeColor = System.Drawing.Color.Black;
            this.comboBEduction.FormattingEnabled = true;
            this.comboBEduction.Items.AddRange(new object[] {
            "Podstawowe",
            "Średnie",
            "Wyższe"});
            this.comboBEduction.Location = new System.Drawing.Point(130, 391);
            this.comboBEduction.Name = "comboBEduction";
            this.comboBEduction.Size = new System.Drawing.Size(209, 28);
            this.comboBEduction.TabIndex = 12;
            // 
            // label4
            // 
            this.label4.AutoSize = true;
            this.label4.Location = new System.Drawing.Point(9, 394);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(102, 20);
            this.label4.TabIndex = 13;
            this.label4.Text = "Wykształcenie";
            // 
            // cbAgree
            // 
            this.cbAgree.AutoSize = true;
            this.cbAgree.Location = new System.Drawing.Point(130, 456);
            this.cbAgree.Name = "cbAgree";
            this.cbAgree.Size = new System.Drawing.Size(243, 24);
            this.cbAgree.TabIndex = 14;
            this.cbAgree.Text = "Zgoda na przetwarzanie danych";
            this.cbAgree.UseVisualStyleBackColor = true;
            // 
            // Ex2Form
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 20F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(819, 672);
            this.Controls.Add(this.cbAgree);
            this.Controls.Add(this.label4);
            this.Controls.Add(this.comboBEduction);
            this.Controls.Add(this.groupBox1);
            this.Controls.Add(this.panel1);
            this.Controls.Add(this.lbWynik);
            this.Controls.Add(this.button1);
            this.Controls.Add(this.tbNazwisko);
            this.Controls.Add(this.tbImie);
            this.Controls.Add(this.label3);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.label1);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.FixedSingle;
            this.MaximizeBox = false;
            this.Name = "Ex2Form";
            this.Text = "Ćwiczenie 2";
            this.FormClosed += new System.Windows.Forms.FormClosedEventHandler(this.Ex2Form_FormClosed);
            this.Load += new System.EventHandler(this.Ex2Form_Load);
            this.panel1.ResumeLayout(false);
            this.groupBox1.ResumeLayout(false);
            this.groupBox1.PerformLayout();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Button btnExit;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.TextBox tbImie;
        private System.Windows.Forms.TextBox tbNazwisko;
        private System.Windows.Forms.Button button1;
        private System.Windows.Forms.Label lbWynik;
        private System.Windows.Forms.Panel panel1;
        private System.Windows.Forms.RadioButton radioBFemale;
        private System.Windows.Forms.RadioButton radioBMale;
        private System.Windows.Forms.GroupBox groupBox1;
        private System.Windows.Forms.RadioButton rdioBOther;
        private System.Windows.Forms.ComboBox comboBEduction;
        private System.Windows.Forms.Label label4;
        private System.Windows.Forms.CheckBox cbAgree;
    }
}