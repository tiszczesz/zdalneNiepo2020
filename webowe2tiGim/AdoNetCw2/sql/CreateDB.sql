
--nazwa bazy "Gim_2021_Contacts"




/****** Object: Table [dbo].[MyContacts] Script Date: 2021-03-08 10:28:17 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO
use [Gim_2021_Contacts]
Go

CREATE TABLE [dbo].[MyContacts] (
    [Id]       INT           IDENTITY (1, 1) NOT NULL,
    [Nazwisko] NVARCHAR (50) NOT NULL,
    [Imie]     NVARCHAR (50) NULL,
    [Telefon]  VARCHAR (20)  NULL,
    [Email]    VARCHAR (50)  NULL
);