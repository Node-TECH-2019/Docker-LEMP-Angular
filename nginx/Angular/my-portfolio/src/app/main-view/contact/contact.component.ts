import { Component, Input, OnInit } from '@angular/core';
import { Navigation } from '../../navigation';
import { FormBuilder, FormControl, FormGroup, Validators } from "@angular/forms";
import { EmailValidator } from "./email.validator";

@Component({
  selector: 'app-contact',
  templateUrl: './contact.component.html',
  styleUrls: ['./contact.component.css']
})
export class ContactComponent implements OnInit {

  @Input() navigation: Navigation;

  isDisabled: boolean = true;

    email = new FormControl('', [
      Validators.required,
      EmailValidator.commonCheck,
      EmailValidator.localCheck,
      EmailValidator.domainCheck
    ]);

    comment = new FormControl('', [
      Validators.required
    ]);

    subject = new FormControl('', [
      Validators.required
    ]);

    tel = new FormControl('', [
      Validators.required
    ]);

    furigana = new FormControl('', [
      Validators.required
    ]);

    your_name = new FormControl('', [
      Validators.required
    ]);

    companyname = new FormControl('', [
      Validators.required
    ]);

    myForm: FormGroup = this.builder.group({
      email: this.email,
      comment: this.comment,
      subject: this.subject,
      tel: this.tel,
      furigana: this.furigana,
      your_name: this.your_name,
      companyname: this.companyname
    });

  constructor(private builder: FormBuilder,) { }

  isErrorExists() {
    // FormGroupのチェック状態を確認
    if (this.myForm.invalid) {
        this.isDisabled = true;
        return;
    }
    // 設定したcheckを通過していたらemailの形式チェックを行う。
    this.isDisabled = !!(!this.myForm.controls[ 'email' ].value.match(/[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/));
  }

  ngOnInit(): void {
  }


  submit(): void {

  }

  reset(): void {
    var companyname = <HTMLInputElement>document.getElementById("companyname");
    var your_name = <HTMLInputElement>document.getElementById("your_name");
    var furigana = <HTMLInputElement>document.getElementById("furigana");
    var email = <HTMLInputElement>document.getElementById("email");
    var tel = <HTMLInputElement>document.getElementById("tel");
    var subject = <HTMLInputElement>document.getElementById("subject");
    var comment = <HTMLInputElement>document.getElementById("comment");
    companyname.value = '';
    your_name.value = '';
    furigana.value = '';
    email.value = '';
    tel.value = '';
    subject.value = '';
    comment.value = '';
  }

}
