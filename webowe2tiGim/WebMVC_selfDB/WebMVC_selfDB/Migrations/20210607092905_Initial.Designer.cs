﻿// <auto-generated />
using Microsoft.EntityFrameworkCore;
using Microsoft.EntityFrameworkCore.Infrastructure;
using Microsoft.EntityFrameworkCore.Metadata;
using Microsoft.EntityFrameworkCore.Migrations;
using Microsoft.EntityFrameworkCore.Storage.ValueConversion;
using WebMVC_selfDB.Data;

namespace WebMVC_selfDB.Migrations
{
    [DbContext(typeof(ProductDbContext))]
    [Migration("20210607092905_Initial")]
    partial class Initial
    {
        protected override void BuildTargetModel(ModelBuilder modelBuilder)
        {
#pragma warning disable 612, 618
            modelBuilder
                .HasAnnotation("Relational:MaxIdentifierLength", 128)
                .HasAnnotation("ProductVersion", "5.0.6")
                .HasAnnotation("SqlServer:ValueGenerationStrategy", SqlServerValueGenerationStrategy.IdentityColumn);

            modelBuilder.Entity("WebMVC_selfDB.Models.Product", b =>
                {
                    b.Property<int>("Id")
                        .ValueGeneratedOnAdd()
                        .HasColumnType("int")
                        .HasAnnotation("SqlServer:ValueGenerationStrategy", SqlServerValueGenerationStrategy.IdentityColumn);

                    b.Property<string>("Description")
                        .HasColumnType("nvarchar(max)");

                    b.Property<string>("Name")
                        .IsRequired()
                        .HasMaxLength(50)
                        .HasColumnType("nvarchar(50)");

                    b.Property<decimal>("Price")
                        .HasColumnType("decimal(18,2)");

                    b.HasKey("Id");

                    b.ToTable("Products");

                    b.HasData(
                        new
                        {
                            Id = 1,
                            Description = "Chrupiący chlebek na śniadanko",
                            Name = "chleb",
                            Price = 2.99m
                        },
                        new
                        {
                            Id = 2,
                            Description = "Chrupiący bułka na śniadanko",
                            Name = "bułka",
                            Price = 0.99m
                        },
                        new
                        {
                            Id = 3,
                            Description = "Świeże masło prawdziwe",
                            Name = "masło",
                            Price = 4.99m
                        },
                        new
                        {
                            Id = 4,
                            Description = "Kubek śmietany pożywnej",
                            Name = "śmietana 18%",
                            Price = 5.66m
                        });
                });
#pragma warning restore 612, 618
        }
    }
}
