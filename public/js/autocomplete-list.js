var availableTags = [
      "Asus",
      "SuperMicro",
      "Chipset",
      "LAN",
      "Storage",
      "Video",
      "Motherboard",
      "Windows",
      "Windows Server",
      "CentOS",
      "Debian",
      "FreeBSD",
      "FreeNAS",
      "PFSense",
      "Linux",
      "Red Hat Enterprise Linux",
      "Ubuntu",
      "Untangle",
      "Scientific"

    ];

      $( "#name" ).autocomplete({
            source: availableTags
      });