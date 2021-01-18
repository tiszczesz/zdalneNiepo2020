USE [Filmy2020_Gim_cw1]
GO

/****** Object: Table [dbo].[Filmy] Script Date: 18.01.2021 10:20:50 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[Filmy] (
    [Id]     INT             IDENTITY (1, 1) NOT NULL,
    [Title]  VARCHAR (50)    NULL,
    [Author] VARCHAR (50)    NULL,
    [Length] INT             NULL,
    [Price]  DECIMAL (10, 2) NULL
);


