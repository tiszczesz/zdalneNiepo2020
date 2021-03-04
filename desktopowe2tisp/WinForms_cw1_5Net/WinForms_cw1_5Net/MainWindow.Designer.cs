
namespace WinForms_cw1_5Net
{
    partial class MainWindow
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
            this.panel1 = new System.Windows.Forms.Panel();
            this.btnExit = new System.Windows.Forms.Button();
            this.btnEx2 = new System.Windows.Forms.Button();
            this.btnEx1 = new System.Windows.Forms.Button();
            this.txtBoxMain = new System.Windows.Forms.TextBox();
            this.panel1.SuspendLayout();
            this.SuspendLayout();
            // 
            // panel1
            // 
            this.panel1.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(255)))), ((int)(((byte)(255)))), ((int)(((byte)(128)))));
            this.panel1.Controls.Add(this.btnExit);
            this.panel1.Controls.Add(this.btnEx2);
            this.panel1.Controls.Add(this.btnEx1);
            this.panel1.Dock = System.Windows.Forms.DockStyle.Left;
            this.panel1.Location = new System.Drawing.Point(0, 0);
            this.panel1.Name = "panel1";
            this.panel1.Size = new System.Drawing.Size(150, 579);
            this.panel1.TabIndex = 0;
            // 
            // btnExit
            // 
            this.btnExit.Anchor = ((System.Windows.Forms.AnchorStyles)((System.Windows.Forms.AnchorStyles.Bottom | System.Windows.Forms.AnchorStyles.Left)));
            this.btnExit.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(0)))), ((int)(((byte)(0)))), ((int)(((byte)(64)))));
            this.btnExit.ForeColor = System.Drawing.SystemColors.Control;
            this.btnExit.Location = new System.Drawing.Point(12, 520);
            this.btnExit.Name = "btnExit";
            this.btnExit.Size = new System.Drawing.Size(123, 47);
            this.btnExit.TabIndex = 2;
            this.btnExit.Text = "Wyjście";
            this.btnExit.UseVisualStyleBackColor = false;
            this.btnExit.Click += new System.EventHandler(this.btnExit_Click);
            // 
            // btnEx2
            // 
            this.btnEx2.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(128)))), ((int)(((byte)(128)))), ((int)(((byte)(255)))));
            this.btnEx2.Location = new System.Drawing.Point(12, 65);
            this.btnEx2.Name = "btnEx2";
            this.btnEx2.Size = new System.Drawing.Size(123, 47);
            this.btnEx2.TabIndex = 1;
            this.btnEx2.Text = "Ćwiczenie 2";
            this.btnEx2.UseVisualStyleBackColor = false;
            this.btnEx2.Click += new System.EventHandler(this.btnEx2_Click);
            // 
            // btnEx1
            // 
            this.btnEx1.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(128)))), ((int)(((byte)(128)))), ((int)(((byte)(255)))));
            this.btnEx1.Location = new System.Drawing.Point(12, 12);
            this.btnEx1.Name = "btnEx1";
            this.btnEx1.Size = new System.Drawing.Size(123, 47);
            this.btnEx1.TabIndex = 0;
            this.btnEx1.Text = "Ćwiczenie 1";
            this.btnEx1.UseVisualStyleBackColor = false;
            this.btnEx1.Click += new System.EventHandler(this.btnEx1_Click);
            // 
            // txtBoxMain
            // 
            this.txtBoxMain.Dock = System.Windows.Forms.DockStyle.Fill;
            this.txtBoxMain.Location = new System.Drawing.Point(150, 0);
            this.txtBoxMain.Multiline = true;
            this.txtBoxMain.Name = "txtBoxMain";
            this.txtBoxMain.ScrollBars = System.Windows.Forms.ScrollBars.Vertical;
            this.txtBoxMain.Size = new System.Drawing.Size(650, 579);
            this.txtBoxMain.TabIndex = 1;
            // 
            // MainWindow
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 20F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(800, 579);
            this.Controls.Add(this.txtBoxMain);
            this.Controls.Add(this.panel1);
            this.MinimumSize = new System.Drawing.Size(400, 400);
            this.Name = "MainWindow";
            this.Text = "Okienko główne v.1.0";
            this.panel1.ResumeLayout(false);
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Panel panel1;
        private System.Windows.Forms.Button btnEx1;
        private System.Windows.Forms.TextBox txtBoxMain;
        private System.Windows.Forms.Button btnEx2;
        private System.Windows.Forms.Button btnExit;
    }
}