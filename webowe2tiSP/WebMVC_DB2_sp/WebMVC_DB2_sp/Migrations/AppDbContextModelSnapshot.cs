﻿// <auto-generated />
using Microsoft.EntityFrameworkCore;
using Microsoft.EntityFrameworkCore.Infrastructure;
using Microsoft.EntityFrameworkCore.Metadata;
using Microsoft.EntityFrameworkCore.Storage.ValueConversion;
using WebMVC_DB2_sp.Data;

namespace WebMVC_DB2_sp.Migrations
{
    [DbContext(typeof(AppDbContext))]
    partial class AppDbContextModelSnapshot : ModelSnapshot
    {
        protected override void BuildModel(ModelBuilder modelBuilder)
        {
#pragma warning disable 612, 618
            modelBuilder
                .HasAnnotation("Relational:MaxIdentifierLength", 128)
                .HasAnnotation("ProductVersion", "5.0.6")
                .HasAnnotation("SqlServer:ValueGenerationStrategy", SqlServerValueGenerationStrategy.IdentityColumn);

            modelBuilder.Entity("WebMVC_DB2_sp.Models.Animal", b =>
                {
                    b.Property<int>("Id")
                        .ValueGeneratedOnAdd()
                        .HasColumnType("int")
                        .HasAnnotation("SqlServer:ValueGenerationStrategy", SqlServerValueGenerationStrategy.IdentityColumn);

                    b.Property<string>("Description")
                        .HasColumnType("nvarchar(max)");

                    b.Property<string>("Name")
                        .IsRequired()
                        .HasColumnType("nvarchar(max)");

                    b.Property<int>("Weight")
                        .HasColumnType("int");

                    b.HasKey("Id");

                    b.ToTable("Animals");

                    b.HasData(
                        new
                        {
                            Id = 1,
                            Description = "Mały biały piesek bez łat",
                            Name = "Pikuś",
                            Weight = 2000
                        },
                        new
                        {
                            Id = 2,
                            Description = "Coś na ząbek",
                            Name = "Rybka",
                            Weight = 20
                        },
                        new
                        {
                            Id = 3,
                            Description = "Mały żółty ptaszek śpiewający",
                            Name = "Kanarek",
                            Weight = 100
                        },
                        new
                        {
                            Id = 4,
                            Description = "Mały czarny kotek bez łat",
                            Name = "Mruczek",
                            Weight = 1000
                        },
                        new
                        {
                            Id = 5,
                            Description = "Duży biały kotek bez łat",
                            Name = "Bonifacy",
                            Weight = 2000
                        });
                });
#pragma warning restore 612, 618
        }
    }
}