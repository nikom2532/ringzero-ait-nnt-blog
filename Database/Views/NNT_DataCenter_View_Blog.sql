USE [NNT_DataCenter_2]
GO
/****** Object:  View [dbo].[VW_Blog_NewsType]    Script Date: 07/02/2014 14:28:13 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE VIEW [dbo].[VW_Blog_NewsType]
AS
SELECT     TOP (100) PERCENT dbo.NT02_NewsType.NT02_TypeID, dbo.NT02_NewsType.NT02_TypeName AS TypeNews, dbo.NT03_NewsSubType.NT03_SubTypeID, 
                      dbo.NT03_NewsSubType.NT03_SubTypeName AS SubType, dbo.NT02_NewsType.NT02_Status
FROM         dbo.NT02_NewsType INNER JOIN
                      dbo.NT03_NewsSubType ON dbo.NT02_NewsType.NT02_TypeID = dbo.NT03_NewsSubType.NT02_TypeID
WHERE     (dbo.NT02_NewsType.NT02_Status = 'Y')
ORDER BY 'NT02_TypeID'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_DiagramPane1', @value=N'[0E232FF0-B466-11cf-A24F-00AA00A3EFFF, 1.00]
Begin DesignProperties = 
   Begin PaneConfigurations = 
      Begin PaneConfiguration = 0
         NumPanes = 4
         Configuration = "(H (1[40] 4[20] 2[20] 3) )"
      End
      Begin PaneConfiguration = 1
         NumPanes = 3
         Configuration = "(H (1 [50] 4 [25] 3))"
      End
      Begin PaneConfiguration = 2
         NumPanes = 3
         Configuration = "(H (1 [50] 2 [25] 3))"
      End
      Begin PaneConfiguration = 3
         NumPanes = 3
         Configuration = "(H (4 [30] 2 [40] 3))"
      End
      Begin PaneConfiguration = 4
         NumPanes = 2
         Configuration = "(H (1 [56] 3))"
      End
      Begin PaneConfiguration = 5
         NumPanes = 2
         Configuration = "(H (2 [66] 3))"
      End
      Begin PaneConfiguration = 6
         NumPanes = 2
         Configuration = "(H (4 [50] 3))"
      End
      Begin PaneConfiguration = 7
         NumPanes = 1
         Configuration = "(V (3))"
      End
      Begin PaneConfiguration = 8
         NumPanes = 3
         Configuration = "(H (1[56] 4[18] 2) )"
      End
      Begin PaneConfiguration = 9
         NumPanes = 2
         Configuration = "(H (1 [75] 4))"
      End
      Begin PaneConfiguration = 10
         NumPanes = 2
         Configuration = "(H (1[66] 2) )"
      End
      Begin PaneConfiguration = 11
         NumPanes = 2
         Configuration = "(H (4 [60] 2))"
      End
      Begin PaneConfiguration = 12
         NumPanes = 1
         Configuration = "(H (1) )"
      End
      Begin PaneConfiguration = 13
         NumPanes = 1
         Configuration = "(V (4))"
      End
      Begin PaneConfiguration = 14
         NumPanes = 1
         Configuration = "(V (2))"
      End
      ActivePaneConfig = 0
   End
   Begin DiagramPane = 
      Begin Origin = 
         Top = 0
         Left = 0
      End
      Begin Tables = 
         Begin Table = "NT02_NewsType"
            Begin Extent = 
               Top = 6
               Left = 38
               Bottom = 114
               Right = 212
            End
            DisplayFlags = 280
            TopColumn = 0
         End
         Begin Table = "NT03_NewsSubType"
            Begin Extent = 
               Top = 6
               Left = 250
               Bottom = 114
               Right = 442
            End
            DisplayFlags = 280
            TopColumn = 0
         End
      End
   End
   Begin SQLPane = 
   End
   Begin DataPane = 
      Begin ParameterDefaults = ""
      End
      Begin ColumnWidths = 9
         Width = 284
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
      End
   End
   Begin CriteriaPane = 
      Begin ColumnWidths = 11
         Column = 1440
         Alias = 900
         Table = 1170
         Output = 720
         Append = 1400
         NewValue = 1170
         SortType = 1350
         SortOrder = 1410
         GroupBy = 1350
         Filter = 1350
         Or = 1350
         Or = 1350
         Or = 1350
      End
   End
End
' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'VIEW',@level1name=N'VW_Blog_NewsType'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_DiagramPaneCount', @value=1 , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'VIEW',@level1name=N'VW_Blog_NewsType'
GO
/****** Object:  View [dbo].[VW_Blog_Voice]    Script Date: 07/02/2014 14:28:13 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE VIEW [dbo].[VW_Blog_Voice]
AS
SELECT     dbo.NT01_News.NT01_NewsID, dbo.NT12_Voice.NT12_VoiceID, dbo.NT12_Voice.NT12_VoiceName, 
                      'http://thainews.prd.go.th/centerapp/Common/GetFile.aspx?FileUrl=' + dbo.NT12_Voice.NT12_VoicePath AS NT12_VoicePath, dbo.NT12_Voice.NT12_Status, 
                      dbo.NT12_Voice.NT12_Extension, dbo.NT01_News.NT01_ReporterID
FROM         dbo.NT01_News INNER JOIN
                      dbo.NT12_Voice ON dbo.NT01_News.NT01_NewsID = dbo.NT12_Voice.NT01_NewsID INNER JOIN
                      dbo.SC03_User ON dbo.NT01_News.NT01_ReporterID = dbo.SC03_User.SC03_UserId
WHERE     (dbo.NT12_Voice.NT12_Status = 'Y')
GO
EXEC sys.sp_addextendedproperty @name=N'MS_DiagramPane1', @value=N'[0E232FF0-B466-11cf-A24F-00AA00A3EFFF, 1.00]
Begin DesignProperties = 
   Begin PaneConfigurations = 
      Begin PaneConfiguration = 0
         NumPanes = 4
         Configuration = "(H (1[41] 4[21] 2[10] 3) )"
      End
      Begin PaneConfiguration = 1
         NumPanes = 3
         Configuration = "(H (1 [50] 4 [25] 3))"
      End
      Begin PaneConfiguration = 2
         NumPanes = 3
         Configuration = "(H (1 [50] 2 [25] 3))"
      End
      Begin PaneConfiguration = 3
         NumPanes = 3
         Configuration = "(H (4 [30] 2 [40] 3))"
      End
      Begin PaneConfiguration = 4
         NumPanes = 2
         Configuration = "(H (1 [56] 3))"
      End
      Begin PaneConfiguration = 5
         NumPanes = 2
         Configuration = "(H (2 [66] 3))"
      End
      Begin PaneConfiguration = 6
         NumPanes = 2
         Configuration = "(H (4 [50] 3))"
      End
      Begin PaneConfiguration = 7
         NumPanes = 1
         Configuration = "(V (3))"
      End
      Begin PaneConfiguration = 8
         NumPanes = 3
         Configuration = "(H (1[56] 4[18] 2) )"
      End
      Begin PaneConfiguration = 9
         NumPanes = 2
         Configuration = "(H (1 [75] 4))"
      End
      Begin PaneConfiguration = 10
         NumPanes = 2
         Configuration = "(H (1[66] 2) )"
      End
      Begin PaneConfiguration = 11
         NumPanes = 2
         Configuration = "(H (4 [60] 2))"
      End
      Begin PaneConfiguration = 12
         NumPanes = 1
         Configuration = "(H (1) )"
      End
      Begin PaneConfiguration = 13
         NumPanes = 1
         Configuration = "(V (4))"
      End
      Begin PaneConfiguration = 14
         NumPanes = 1
         Configuration = "(V (2))"
      End
      ActivePaneConfig = 0
   End
   Begin DiagramPane = 
      Begin Origin = 
         Top = 0
         Left = 0
      End
      Begin Tables = 
         Begin Table = "NT01_News"
            Begin Extent = 
               Top = 6
               Left = 38
               Bottom = 114
               Right = 254
            End
            DisplayFlags = 280
            TopColumn = 11
         End
         Begin Table = "NT12_Voice"
            Begin Extent = 
               Top = 6
               Left = 292
               Bottom = 114
               Right = 458
            End
            DisplayFlags = 280
            TopColumn = 0
         End
         Begin Table = "SC03_User"
            Begin Extent = 
               Top = 6
               Left = 496
               Bottom = 114
               Right = 719
            End
            DisplayFlags = 280
            TopColumn = 0
         End
      End
   End
   Begin SQLPane = 
   End
   Begin DataPane = 
      Begin ParameterDefaults = ""
      End
      Begin ColumnWidths = 9
         Width = 284
         Width = 2325
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
      End
   End
   Begin CriteriaPane = 
      Begin ColumnWidths = 11
         Column = 1440
         Alias = 900
         Table = 1170
         Output = 720
         Append = 1400
         NewValue = 1170
         SortType = 1350
         SortOrder = 1410
         GroupBy = 1350
         Filter = 1350
         Or = 1350
         Or = 1350
         Or = 1350
      End
   End
End
' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'VIEW',@level1name=N'VW_Blog_Voice'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_DiagramPaneCount', @value=1 , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'VIEW',@level1name=N'VW_Blog_Voice'
GO
/****** Object:  View [dbo].[VW_Blog_VDO]    Script Date: 07/02/2014 14:28:13 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE VIEW [dbo].[VW_Blog_VDO]
AS
SELECT     dbo.NT01_News.NT01_NewsID, dbo.NT10_VDO.NT10_VDOID, dbo.NT10_VDO.NT10_VDOName, 
                      'http://thainews.prd.go.th/centerapp/Common/GetFile.aspx?FileUrl=' + dbo.NT10_VDO.NT10_VDOPath AS url, dbo.NT10_VDO.NT10_Extension, 
                      dbo.NT10_VDO.NT10_FileSize, dbo.NT10_VDO.NT10_Status, dbo.NT01_News.NT01_ReporterID
FROM         dbo.NT10_VDO INNER JOIN
                      dbo.NT01_News ON dbo.NT10_VDO.NT01_NewsID = dbo.NT01_News.NT01_NewsID INNER JOIN
                      dbo.SC03_User ON dbo.NT01_News.NT01_ReporterID = dbo.SC03_User.SC03_UserId
WHERE     (dbo.NT10_VDO.NT10_Status = 'Y')
GO
EXEC sys.sp_addextendedproperty @name=N'MS_DiagramPane1', @value=N'[0E232FF0-B466-11cf-A24F-00AA00A3EFFF, 1.00]
Begin DesignProperties = 
   Begin PaneConfigurations = 
      Begin PaneConfiguration = 0
         NumPanes = 4
         Configuration = "(H (1[41] 4[21] 2[5] 3) )"
      End
      Begin PaneConfiguration = 1
         NumPanes = 3
         Configuration = "(H (1 [50] 4 [25] 3))"
      End
      Begin PaneConfiguration = 2
         NumPanes = 3
         Configuration = "(H (1 [50] 2 [25] 3))"
      End
      Begin PaneConfiguration = 3
         NumPanes = 3
         Configuration = "(H (4 [30] 2 [40] 3))"
      End
      Begin PaneConfiguration = 4
         NumPanes = 2
         Configuration = "(H (1 [56] 3))"
      End
      Begin PaneConfiguration = 5
         NumPanes = 2
         Configuration = "(H (2 [66] 3))"
      End
      Begin PaneConfiguration = 6
         NumPanes = 2
         Configuration = "(H (4 [50] 3))"
      End
      Begin PaneConfiguration = 7
         NumPanes = 1
         Configuration = "(V (3))"
      End
      Begin PaneConfiguration = 8
         NumPanes = 3
         Configuration = "(H (1[56] 4[18] 2) )"
      End
      Begin PaneConfiguration = 9
         NumPanes = 2
         Configuration = "(H (1 [75] 4))"
      End
      Begin PaneConfiguration = 10
         NumPanes = 2
         Configuration = "(H (1[66] 2) )"
      End
      Begin PaneConfiguration = 11
         NumPanes = 2
         Configuration = "(H (4 [60] 2))"
      End
      Begin PaneConfiguration = 12
         NumPanes = 1
         Configuration = "(H (1) )"
      End
      Begin PaneConfiguration = 13
         NumPanes = 1
         Configuration = "(V (4))"
      End
      Begin PaneConfiguration = 14
         NumPanes = 1
         Configuration = "(V (2))"
      End
      ActivePaneConfig = 0
   End
   Begin DiagramPane = 
      Begin Origin = 
         Top = 0
         Left = 0
      End
      Begin Tables = 
         Begin Table = "NT10_VDO"
            Begin Extent = 
               Top = 6
               Left = 38
               Bottom = 114
               Right = 204
            End
            DisplayFlags = 280
            TopColumn = 0
         End
         Begin Table = "NT01_News"
            Begin Extent = 
               Top = 6
               Left = 242
               Bottom = 114
               Right = 458
            End
            DisplayFlags = 280
            TopColumn = 12
         End
         Begin Table = "SC03_User"
            Begin Extent = 
               Top = 6
               Left = 496
               Bottom = 114
               Right = 719
            End
            DisplayFlags = 280
            TopColumn = 0
         End
      End
   End
   Begin SQLPane = 
   End
   Begin DataPane = 
      Begin ParameterDefaults = ""
      End
      Begin ColumnWidths = 9
         Width = 284
         Width = 2130
         Width = 2550
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
      End
   End
   Begin CriteriaPane = 
      Begin ColumnWidths = 11
         Column = 1440
         Alias = 900
         Table = 1170
         Output = 720
         Append = 1400
         NewValue = 1170
         SortType = 1350
         SortOrder = 1410
         GroupBy = 1350
         Filter = 1350
         Or = 1350
         Or = 1350
         Or = 1350
      End
   End
End
' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'VIEW',@level1name=N'VW_Blog_VDO'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_DiagramPaneCount', @value=1 , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'VIEW',@level1name=N'VW_Blog_VDO'
GO
/****** Object:  View [dbo].[VW_Blog_User]    Script Date: 07/02/2014 14:28:13 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE VIEW [dbo].[VW_Blog_User]
AS
SELECT     TOP (100) PERCENT SC03.SC03_UserId AS UserID, SC03.SC03_TName AS Title, SC03.SC03_FName AS FName, SC03.SC03_LName AS LName, 
                      SC03.SC03_Gender AS Gender, SC03.SC03_Email AS Email, SC03.SC03_UserName AS Username, SC03.SC03_Password, SC03.SC03_Tel AS Tel, 
                      SC03.SC03_PhoneOffice AS [Phone Office], SC03.SC03_Address AS Address, SC03.SC03_Career AS Career, SC03.SC03_PositionType AS PositionType, 
                      SC03.SC03_Position AS Position, SC03.SC03_IDCard AS IDCard, SC03.SC03_RegisterDate AS RegisterDate, SC03.SC03_ContactName AS ContactName, 
                      dbo.CM13_Country.CM13_CountryName AS Country, SC17.SC17_SystemName AS System, SC07.SC07_DepartmentName AS Department, 
                      CM05.CM05_RegionName AS Region, CM06.CM06_ProvinceName AS Province, CM07.CM07_AmpurName AS Ampur, CM08.CM08_TumbonName AS Tumbon, 
                      SC03.SC03_Status
FROM         dbo.SC03_User AS SC03 LEFT OUTER JOIN
                      dbo.CM13_Country ON SC03.CM13_CountryID = dbo.CM13_Country.CM13_CountryID LEFT OUTER JOIN
                      dbo.SC17_System AS SC17 ON SC03.SC17_SystemID = SC17.SC17_SystemID LEFT OUTER JOIN
                      dbo.CM05_Region AS CM05 ON SC03.CM05_RegionId = CM05.CM05_RegionID LEFT OUTER JOIN
                      dbo.SC07_Department AS SC07 ON SC03.SC07_DepartmentId = SC07.SC07_DepartmentId LEFT OUTER JOIN
                      dbo.CM07_Ampur AS CM07 ON SC03.CM07_AmpurId = CM07.CM07_AmpurID LEFT OUTER JOIN
                      dbo.CM06_Province AS CM06 ON SC03.CM06_ProvinceId = CM06.CM06_ProvinceID LEFT OUTER JOIN
                      dbo.CM08_Tumbon AS CM08 ON SC03.CM08_TumbonId = CM08.CM08_TumbonID
WHERE     (SC03.SC03_Status = 'T')
ORDER BY 'System', SC07.SC07_DepartmentSeq
GO
EXEC sys.sp_addextendedproperty @name=N'MS_DiagramPane1', @value=N'[0E232FF0-B466-11cf-A24F-00AA00A3EFFF, 1.00]
Begin DesignProperties = 
   Begin PaneConfigurations = 
      Begin PaneConfiguration = 0
         NumPanes = 4
         Configuration = "(H (1[26] 4[33] 2[4] 3) )"
      End
      Begin PaneConfiguration = 1
         NumPanes = 3
         Configuration = "(H (1 [50] 4 [25] 3))"
      End
      Begin PaneConfiguration = 2
         NumPanes = 3
         Configuration = "(H (1 [50] 2 [25] 3))"
      End
      Begin PaneConfiguration = 3
         NumPanes = 3
         Configuration = "(H (4 [30] 2 [40] 3))"
      End
      Begin PaneConfiguration = 4
         NumPanes = 2
         Configuration = "(H (1 [56] 3))"
      End
      Begin PaneConfiguration = 5
         NumPanes = 2
         Configuration = "(H (2 [66] 3))"
      End
      Begin PaneConfiguration = 6
         NumPanes = 2
         Configuration = "(H (4 [50] 3))"
      End
      Begin PaneConfiguration = 7
         NumPanes = 1
         Configuration = "(V (3))"
      End
      Begin PaneConfiguration = 8
         NumPanes = 3
         Configuration = "(H (1[56] 4[18] 2) )"
      End
      Begin PaneConfiguration = 9
         NumPanes = 2
         Configuration = "(H (1 [75] 4))"
      End
      Begin PaneConfiguration = 10
         NumPanes = 2
         Configuration = "(H (1[66] 2) )"
      End
      Begin PaneConfiguration = 11
         NumPanes = 2
         Configuration = "(H (4 [60] 2))"
      End
      Begin PaneConfiguration = 12
         NumPanes = 1
         Configuration = "(H (1) )"
      End
      Begin PaneConfiguration = 13
         NumPanes = 1
         Configuration = "(V (4))"
      End
      Begin PaneConfiguration = 14
         NumPanes = 1
         Configuration = "(V (2))"
      End
      ActivePaneConfig = 0
   End
   Begin DiagramPane = 
      Begin Origin = 
         Top = 0
         Left = 0
      End
      Begin Tables = 
         Begin Table = "SC03"
            Begin Extent = 
               Top = 6
               Left = 38
               Bottom = 114
               Right = 261
            End
            DisplayFlags = 280
            TopColumn = 30
         End
         Begin Table = "CM13_Country"
            Begin Extent = 
               Top = 6
               Left = 299
               Bottom = 114
               Right = 494
            End
            DisplayFlags = 280
            TopColumn = 0
         End
         Begin Table = "SC17"
            Begin Extent = 
               Top = 6
               Left = 532
               Bottom = 114
               Right = 705
            End
            DisplayFlags = 280
            TopColumn = 0
         End
         Begin Table = "CM05"
            Begin Extent = 
               Top = 114
               Left = 38
               Bottom = 222
               Right = 223
            End
            DisplayFlags = 280
            TopColumn = 0
         End
         Begin Table = "SC07"
            Begin Extent = 
               Top = 114
               Left = 261
               Bottom = 222
               Right = 471
            End
            DisplayFlags = 280
            TopColumn = 0
         End
         Begin Table = "CM07"
            Begin Extent = 
               Top = 114
               Left = 509
               Bottom = 222
               Right = 692
            End
            DisplayFlags = 280
            TopColumn = 0
         End
         Begin Table = "CM06"
            Begin Extent = 
               Top = 222
               Left = 38
               Bottom = 330
               Right = 231
            End
            DisplayFlags = 280
            To' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'VIEW',@level1name=N'VW_Blog_User'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_DiagramPane2', @value=N'pColumn = 0
         End
         Begin Table = "CM08"
            Begin Extent = 
               Top = 222
               Left = 269
               Bottom = 330
               Right = 459
            End
            DisplayFlags = 280
            TopColumn = 0
         End
      End
   End
   Begin SQLPane = 
   End
   Begin DataPane = 
      Begin ParameterDefaults = ""
      End
      Begin ColumnWidths = 27
         Width = 284
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 2640
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
      End
   End
   Begin CriteriaPane = 
      Begin ColumnWidths = 11
         Column = 3495
         Alias = 900
         Table = 1170
         Output = 720
         Append = 1400
         NewValue = 1170
         SortType = 1350
         SortOrder = 1410
         GroupBy = 1350
         Filter = 1350
         Or = 1350
         Or = 1350
         Or = 1350
      End
   End
End
' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'VIEW',@level1name=N'VW_Blog_User'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_DiagramPaneCount', @value=2 , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'VIEW',@level1name=N'VW_Blog_User'
GO
/****** Object:  View [dbo].[VW_Blog_RawNews]    Script Date: 07/02/2014 14:28:13 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE VIEW [dbo].[VW_Blog_RawNews]
AS
SELECT     TOP (100) PERCENT NT01.NT01_NewsID, NT01.NT01_NewsTitle, NT01.NT01_NewsDesc, NT01.NT01_FullText, NT01.NT01_NewsDate, NT02.NT02_TypeID, 
                      NT02.NT02_TypeName, NT03.NT03_SubTypeID, NT03.NT03_SubTypeName, SC07.SC07_DepartmentName, NT01.NT01_NewsTag, NT01.NT01_NewsReferance, 
                      SC03_Reporter.SC03_UserId, SC03_Reporter.SC03_TName, SC03_Reporter.SC03_FName, SC03_Reporter.SC03_LName
FROM         dbo.NT01_News AS NT01 LEFT OUTER JOIN
                      dbo.SC03_User AS SC03_Reporter ON NT01.NT01_ReporterID = SC03_Reporter.SC03_UserId LEFT OUTER JOIN
                      dbo.CM06_Province AS CM06 ON NT01.CM06_ProvinceID = CM06.CM06_ProvinceID LEFT OUTER JOIN
                      dbo.SC07_Department AS SC07 ON NT01.SC07_DepartmentId = SC07.SC07_DepartmentId LEFT OUTER JOIN
                      dbo.NT03_NewsSubType AS NT03 ON NT01.NT03_SubTypeID = NT03.NT03_SubTypeID LEFT OUTER JOIN
                      dbo.NT02_NewsType AS NT02 ON NT01.NT02_TypeID = NT02.NT02_TypeID
WHERE     (NT01.NT01_BasketNews IS NULL) AND (SC03_Reporter.SC03_UserId <> 2000000930)
ORDER BY NT01.NT01_NewsDate DESC
GO
EXEC sys.sp_addextendedproperty @name=N'MS_DiagramPane1', @value=N'[0E232FF0-B466-11cf-A24F-00AA00A3EFFF, 1.00]
Begin DesignProperties = 
   Begin PaneConfigurations = 
      Begin PaneConfiguration = 0
         NumPanes = 4
         Configuration = "(H (1[21] 4[23] 2[18] 3) )"
      End
      Begin PaneConfiguration = 1
         NumPanes = 3
         Configuration = "(H (1 [50] 4 [25] 3))"
      End
      Begin PaneConfiguration = 2
         NumPanes = 3
         Configuration = "(H (1 [50] 2 [25] 3))"
      End
      Begin PaneConfiguration = 3
         NumPanes = 3
         Configuration = "(H (4 [30] 2 [40] 3))"
      End
      Begin PaneConfiguration = 4
         NumPanes = 2
         Configuration = "(H (1 [56] 3))"
      End
      Begin PaneConfiguration = 5
         NumPanes = 2
         Configuration = "(H (2 [66] 3))"
      End
      Begin PaneConfiguration = 6
         NumPanes = 2
         Configuration = "(H (4 [50] 3))"
      End
      Begin PaneConfiguration = 7
         NumPanes = 1
         Configuration = "(V (3))"
      End
      Begin PaneConfiguration = 8
         NumPanes = 3
         Configuration = "(H (1[56] 4[18] 2) )"
      End
      Begin PaneConfiguration = 9
         NumPanes = 2
         Configuration = "(H (1 [75] 4))"
      End
      Begin PaneConfiguration = 10
         NumPanes = 2
         Configuration = "(H (1[66] 2) )"
      End
      Begin PaneConfiguration = 11
         NumPanes = 2
         Configuration = "(H (4 [60] 2))"
      End
      Begin PaneConfiguration = 12
         NumPanes = 1
         Configuration = "(H (1) )"
      End
      Begin PaneConfiguration = 13
         NumPanes = 1
         Configuration = "(V (4))"
      End
      Begin PaneConfiguration = 14
         NumPanes = 1
         Configuration = "(V (2))"
      End
      ActivePaneConfig = 0
   End
   Begin DiagramPane = 
      Begin Origin = 
         Top = 0
         Left = 0
      End
      Begin Tables = 
         Begin Table = "NT01"
            Begin Extent = 
               Top = 0
               Left = 52
               Bottom = 108
               Right = 268
            End
            DisplayFlags = 280
            TopColumn = 25
         End
         Begin Table = "SC03_Reporter"
            Begin Extent = 
               Top = 0
               Left = 332
               Bottom = 108
               Right = 555
            End
            DisplayFlags = 280
            TopColumn = 1
         End
         Begin Table = "CM06"
            Begin Extent = 
               Top = 37
               Left = 561
               Bottom = 145
               Right = 754
            End
            DisplayFlags = 280
            TopColumn = 0
         End
         Begin Table = "SC07"
            Begin Extent = 
               Top = 160
               Left = 62
               Bottom = 268
               Right = 272
            End
            DisplayFlags = 280
            TopColumn = 0
         End
         Begin Table = "NT03"
            Begin Extent = 
               Top = 177
               Left = 305
               Bottom = 285
               Right = 497
            End
            DisplayFlags = 280
            TopColumn = 0
         End
         Begin Table = "NT02"
            Begin Extent = 
               Top = 156
               Left = 553
               Bottom = 264
               Right = 727
            End
            DisplayFlags = 280
            TopColumn = 0
         End
      End
   End
   Begin SQLPane = 
   End
   Begin DataPane = 
      Begin ParameterDefaults = ""
      End
      Begin ColumnWidths = 19
         Width = 284
         Width = 2460
         Width = 2835
         Widt' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'VIEW',@level1name=N'VW_Blog_RawNews'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_DiagramPane2', @value=N'h = 2430
         Width = 2130
         Width = 1680
         Width = 1890
         Width = 1905
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1740
         Width = 1785
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
      End
   End
   Begin CriteriaPane = 
      Begin ColumnWidths = 11
         Column = 4350
         Alias = 1830
         Table = 1170
         Output = 720
         Append = 1400
         NewValue = 1170
         SortType = 1350
         SortOrder = 1410
         GroupBy = 1350
         Filter = 1350
         Or = 1350
         Or = 1350
         Or = 1350
      End
   End
End
' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'VIEW',@level1name=N'VW_Blog_RawNews'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_DiagramPaneCount', @value=2 , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'VIEW',@level1name=N'VW_Blog_RawNews'
GO
/****** Object:  View [dbo].[VW_Blog_PublishNews]    Script Date: 07/02/2014 14:28:13 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE VIEW [dbo].[VW_Blog_PublishNews]
AS
SELECT     TOP (100) PERCENT NT01.NT01_NewsID, NT01.NT01_NewsTitle, NT01.NT01_NewsDesc, NT01.NT01_FullText, NT01.NT01_NewsDate, NT02.NT02_TypeID, 
                      NT02.NT02_TypeName, NT03.NT03_SubTypeID, NT03.NT03_SubTypeName, NT01.NT01_NewsTag, NT01.NT01_NewsReferance, SC07.SC07_DepartmentName, 
                      SC03_Reporter.SC03_UserId, SC03_Reporter.SC03_TName, SC03_Reporter.SC03_FName, SC03_Reporter.SC03_LName
FROM         dbo.NT01_News AS NT01 INNER JOIN
                      dbo.NT08_PublicType AS NT08 ON NT01.NT08_PubTypeID = NT08.NT08_PubTypeID LEFT OUTER JOIN
                      dbo.SC03_User AS SC03_Reporter ON NT01.NT01_ReporterID = SC03_Reporter.SC03_UserId LEFT OUTER JOIN
                      dbo.SC07_Department AS SC07 ON NT01.SC07_DepartmentId = SC07.SC07_DepartmentId LEFT OUTER JOIN
                      dbo.NT03_NewsSubType AS NT03 ON NT01.NT03_SubTypeID = NT03.NT03_SubTypeID LEFT OUTER JOIN
                      dbo.NT02_NewsType AS NT02 ON NT01.NT02_TypeID = NT02.NT02_TypeID
WHERE     (NT01.NT08_PubTypeID IS NOT NULL) AND (NT01.NT08_PubTypeID = 1) AND (NT01.NT01_BasketNews = '1')
ORDER BY 'NT01_NewsDate' DESC
GO
EXEC sys.sp_addextendedproperty @name=N'MS_DiagramPane1', @value=N'[0E232FF0-B466-11cf-A24F-00AA00A3EFFF, 1.00]
Begin DesignProperties = 
   Begin PaneConfigurations = 
      Begin PaneConfiguration = 0
         NumPanes = 4
         Configuration = "(H (1[31] 4[23] 2[12] 3) )"
      End
      Begin PaneConfiguration = 1
         NumPanes = 3
         Configuration = "(H (1 [50] 4 [25] 3))"
      End
      Begin PaneConfiguration = 2
         NumPanes = 3
         Configuration = "(H (1 [50] 2 [25] 3))"
      End
      Begin PaneConfiguration = 3
         NumPanes = 3
         Configuration = "(H (4 [30] 2 [40] 3))"
      End
      Begin PaneConfiguration = 4
         NumPanes = 2
         Configuration = "(H (1 [56] 3))"
      End
      Begin PaneConfiguration = 5
         NumPanes = 2
         Configuration = "(H (2 [66] 3))"
      End
      Begin PaneConfiguration = 6
         NumPanes = 2
         Configuration = "(H (4 [50] 3))"
      End
      Begin PaneConfiguration = 7
         NumPanes = 1
         Configuration = "(V (3))"
      End
      Begin PaneConfiguration = 8
         NumPanes = 3
         Configuration = "(H (1[56] 4[18] 2) )"
      End
      Begin PaneConfiguration = 9
         NumPanes = 2
         Configuration = "(H (1 [75] 4))"
      End
      Begin PaneConfiguration = 10
         NumPanes = 2
         Configuration = "(H (1[66] 2) )"
      End
      Begin PaneConfiguration = 11
         NumPanes = 2
         Configuration = "(H (4 [60] 2))"
      End
      Begin PaneConfiguration = 12
         NumPanes = 1
         Configuration = "(H (1) )"
      End
      Begin PaneConfiguration = 13
         NumPanes = 1
         Configuration = "(V (4))"
      End
      Begin PaneConfiguration = 14
         NumPanes = 1
         Configuration = "(V (2))"
      End
      ActivePaneConfig = 0
   End
   Begin DiagramPane = 
      Begin Origin = 
         Top = 0
         Left = 0
      End
      Begin Tables = 
         Begin Table = "NT01"
            Begin Extent = 
               Top = 6
               Left = 38
               Bottom = 114
               Right = 254
            End
            DisplayFlags = 280
            TopColumn = 54
         End
         Begin Table = "NT08"
            Begin Extent = 
               Top = 6
               Left = 292
               Bottom = 99
               Right = 472
            End
            DisplayFlags = 280
            TopColumn = 0
         End
         Begin Table = "SC03_Reporter"
            Begin Extent = 
               Top = 114
               Left = 299
               Bottom = 222
               Right = 522
            End
            DisplayFlags = 280
            TopColumn = 5
         End
         Begin Table = "SC07"
            Begin Extent = 
               Top = 138
               Left = 73
               Bottom = 246
               Right = 283
            End
            DisplayFlags = 280
            TopColumn = 2
         End
         Begin Table = "NT03"
            Begin Extent = 
               Top = 117
               Left = 627
               Bottom = 225
               Right = 819
            End
            DisplayFlags = 280
            TopColumn = 1
         End
         Begin Table = "NT02"
            Begin Extent = 
               Top = 228
               Left = 499
               Bottom = 336
               Right = 673
            End
            DisplayFlags = 280
            TopColumn = 0
         End
      End
   End
   Begin SQLPane = 
   End
   Begin DataPane = 
      Begin ParameterDefaults = ""
      End
      Begin ColumnWidths = 19
         Width = 284
         Width = 1500
         Width = 1500
         Widt' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'VIEW',@level1name=N'VW_Blog_PublishNews'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_DiagramPane2', @value=N'h = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
      End
   End
   Begin CriteriaPane = 
      Begin ColumnWidths = 11
         Column = 2820
         Alias = 900
         Table = 1170
         Output = 720
         Append = 1400
         NewValue = 1170
         SortType = 1350
         SortOrder = 1410
         GroupBy = 1350
         Filter = 1350
         Or = 1350
         Or = 1350
         Or = 1350
      End
   End
End
' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'VIEW',@level1name=N'VW_Blog_PublishNews'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_DiagramPaneCount', @value=2 , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'VIEW',@level1name=N'VW_Blog_PublishNews'
GO
/****** Object:  View [dbo].[VW_Blog_Picture]    Script Date: 07/02/2014 14:28:13 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE VIEW [dbo].[VW_Blog_Picture]
AS
SELECT     dbo.NT01_News.NT01_NewsID, dbo.NT11_Picture.NT11_PicID, dbo.NT11_Picture.NT11_PicName, 
                      'http://thainews.prd.go.th/centerapp/Common/GetFile.aspx?FileUrl=' + dbo.NT11_Picture.NT11_PicPath AS url, dbo.NT11_Picture.NT11_Extension, 
                      dbo.NT11_Picture.NT11_FileSize, dbo.NT11_Picture.NT11_Status, dbo.NT01_News.NT01_ReporterID
FROM         dbo.NT01_News INNER JOIN
                      dbo.NT11_Picture ON dbo.NT01_News.NT01_NewsID = dbo.NT11_Picture.NT01_NewsID INNER JOIN
                      dbo.SC03_User ON dbo.NT01_News.NT01_ReporterID = dbo.SC03_User.SC03_UserId
WHERE     (dbo.NT11_Picture.NT11_Status = 'Y')
GO
EXEC sys.sp_addextendedproperty @name=N'MS_DiagramPane1', @value=N'[0E232FF0-B466-11cf-A24F-00AA00A3EFFF, 1.00]
Begin DesignProperties = 
   Begin PaneConfigurations = 
      Begin PaneConfiguration = 0
         NumPanes = 4
         Configuration = "(H (1[42] 4[22] 2[7] 3) )"
      End
      Begin PaneConfiguration = 1
         NumPanes = 3
         Configuration = "(H (1 [50] 4 [25] 3))"
      End
      Begin PaneConfiguration = 2
         NumPanes = 3
         Configuration = "(H (1 [50] 2 [25] 3))"
      End
      Begin PaneConfiguration = 3
         NumPanes = 3
         Configuration = "(H (4 [30] 2 [40] 3))"
      End
      Begin PaneConfiguration = 4
         NumPanes = 2
         Configuration = "(H (1 [56] 3))"
      End
      Begin PaneConfiguration = 5
         NumPanes = 2
         Configuration = "(H (2 [66] 3))"
      End
      Begin PaneConfiguration = 6
         NumPanes = 2
         Configuration = "(H (4 [50] 3))"
      End
      Begin PaneConfiguration = 7
         NumPanes = 1
         Configuration = "(V (3))"
      End
      Begin PaneConfiguration = 8
         NumPanes = 3
         Configuration = "(H (1[56] 4[18] 2) )"
      End
      Begin PaneConfiguration = 9
         NumPanes = 2
         Configuration = "(H (1 [75] 4))"
      End
      Begin PaneConfiguration = 10
         NumPanes = 2
         Configuration = "(H (1[66] 2) )"
      End
      Begin PaneConfiguration = 11
         NumPanes = 2
         Configuration = "(H (4 [60] 2))"
      End
      Begin PaneConfiguration = 12
         NumPanes = 1
         Configuration = "(H (1) )"
      End
      Begin PaneConfiguration = 13
         NumPanes = 1
         Configuration = "(V (4))"
      End
      Begin PaneConfiguration = 14
         NumPanes = 1
         Configuration = "(V (2))"
      End
      ActivePaneConfig = 0
   End
   Begin DiagramPane = 
      Begin Origin = 
         Top = 0
         Left = 0
      End
      Begin Tables = 
         Begin Table = "NT01_News"
            Begin Extent = 
               Top = 6
               Left = 38
               Bottom = 114
               Right = 254
            End
            DisplayFlags = 280
            TopColumn = 13
         End
         Begin Table = "NT11_Picture"
            Begin Extent = 
               Top = 6
               Left = 292
               Bottom = 114
               Right = 458
            End
            DisplayFlags = 280
            TopColumn = 0
         End
         Begin Table = "SC03_User"
            Begin Extent = 
               Top = 6
               Left = 496
               Bottom = 114
               Right = 719
            End
            DisplayFlags = 280
            TopColumn = 0
         End
      End
   End
   Begin SQLPane = 
   End
   Begin DataPane = 
      Begin ParameterDefaults = ""
      End
      Begin ColumnWidths = 9
         Width = 284
         Width = 1890
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
      End
   End
   Begin CriteriaPane = 
      Begin ColumnWidths = 11
         Column = 1440
         Alias = 900
         Table = 1170
         Output = 720
         Append = 1400
         NewValue = 1170
         SortType = 1350
         SortOrder = 1410
         GroupBy = 1350
         Filter = 1350
         Or = 1350
         Or = 1350
         Or = 1350
      End
   End
End
' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'VIEW',@level1name=N'VW_Blog_Picture'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_DiagramPaneCount', @value=1 , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'VIEW',@level1name=N'VW_Blog_Picture'
GO
/****** Object:  View [dbo].[VW_Blog_Otherfile]    Script Date: 07/02/2014 14:28:13 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE VIEW [dbo].[VW_Blog_Otherfile]
AS
SELECT     dbo.NT01_News.NT01_NewsID, dbo.NT13_OtherFile.NT13_FileID, dbo.NT13_OtherFile.NT13_FileName, 
                      'http://thainews.prd.go.th/centerapp/Common/GetFile.aspx?FileUrl=' + dbo.NT13_OtherFile.NT13_FilePath AS NT13_FilePath, dbo.NT13_OtherFile.NT13_Extension, 
                      dbo.NT13_OtherFile.NT13_FileSize, dbo.NT13_OtherFile.NT13_Status, dbo.NT01_News.NT01_ReporterID
FROM         dbo.NT01_News INNER JOIN
                      dbo.NT13_OtherFile ON dbo.NT01_News.NT01_NewsID = dbo.NT13_OtherFile.NT01_NewsID INNER JOIN
                      dbo.SC03_User ON dbo.NT01_News.NT01_ReporterID = dbo.SC03_User.SC03_UserId
WHERE     (dbo.NT13_OtherFile.NT13_Status = 'Y')
GO
EXEC sys.sp_addextendedproperty @name=N'MS_DiagramPane1', @value=N'[0E232FF0-B466-11cf-A24F-00AA00A3EFFF, 1.00]
Begin DesignProperties = 
   Begin PaneConfigurations = 
      Begin PaneConfiguration = 0
         NumPanes = 4
         Configuration = "(H (1[42] 4[17] 2[3] 3) )"
      End
      Begin PaneConfiguration = 1
         NumPanes = 3
         Configuration = "(H (1 [50] 4 [25] 3))"
      End
      Begin PaneConfiguration = 2
         NumPanes = 3
         Configuration = "(H (1 [50] 2 [25] 3))"
      End
      Begin PaneConfiguration = 3
         NumPanes = 3
         Configuration = "(H (4 [30] 2 [40] 3))"
      End
      Begin PaneConfiguration = 4
         NumPanes = 2
         Configuration = "(H (1 [56] 3))"
      End
      Begin PaneConfiguration = 5
         NumPanes = 2
         Configuration = "(H (2 [66] 3))"
      End
      Begin PaneConfiguration = 6
         NumPanes = 2
         Configuration = "(H (4 [50] 3))"
      End
      Begin PaneConfiguration = 7
         NumPanes = 1
         Configuration = "(V (3))"
      End
      Begin PaneConfiguration = 8
         NumPanes = 3
         Configuration = "(H (1[56] 4[18] 2) )"
      End
      Begin PaneConfiguration = 9
         NumPanes = 2
         Configuration = "(H (1 [75] 4))"
      End
      Begin PaneConfiguration = 10
         NumPanes = 2
         Configuration = "(H (1[66] 2) )"
      End
      Begin PaneConfiguration = 11
         NumPanes = 2
         Configuration = "(H (4 [60] 2))"
      End
      Begin PaneConfiguration = 12
         NumPanes = 1
         Configuration = "(H (1) )"
      End
      Begin PaneConfiguration = 13
         NumPanes = 1
         Configuration = "(V (4))"
      End
      Begin PaneConfiguration = 14
         NumPanes = 1
         Configuration = "(V (2))"
      End
      ActivePaneConfig = 0
   End
   Begin DiagramPane = 
      Begin Origin = 
         Top = 0
         Left = 0
      End
      Begin Tables = 
         Begin Table = "NT01_News"
            Begin Extent = 
               Top = 6
               Left = 38
               Bottom = 114
               Right = 254
            End
            DisplayFlags = 280
            TopColumn = 12
         End
         Begin Table = "NT13_OtherFile"
            Begin Extent = 
               Top = 6
               Left = 292
               Bottom = 114
               Right = 452
            End
            DisplayFlags = 280
            TopColumn = 0
         End
         Begin Table = "SC03_User"
            Begin Extent = 
               Top = 61
               Left = 471
               Bottom = 169
               Right = 694
            End
            DisplayFlags = 280
            TopColumn = 0
         End
      End
   End
   Begin SQLPane = 
   End
   Begin DataPane = 
      Begin ParameterDefaults = ""
      End
      Begin ColumnWidths = 9
         Width = 284
         Width = 1500
         Width = 2355
         Width = 1845
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
      End
   End
   Begin CriteriaPane = 
      Begin ColumnWidths = 11
         Column = 1440
         Alias = 900
         Table = 1170
         Output = 720
         Append = 1400
         NewValue = 1170
         SortType = 1350
         SortOrder = 1410
         GroupBy = 1350
         Filter = 1350
         Or = 1350
         Or = 1350
         Or = 1350
      End
   End
End
' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'VIEW',@level1name=N'VW_Blog_Otherfile'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_DiagramPaneCount', @value=1 , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'VIEW',@level1name=N'VW_Blog_Otherfile'
GO
